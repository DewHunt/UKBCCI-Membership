<?php
//echo "<pre>"; print_r($_POST); echo "</pre>"; exit();
session_start();
include('vendor/stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_51Gs90iG29g7sUkRNYVsbNOvdiMGAI7oI1RKFgQI6JOGcGKHpGSKJXPlkBjTFOPko6hgCSBhDbCRGCbD5acKFXiGO00jAauWJ5S');

$msg      = 'Sorry! Something went wrong, Please try again later.';
$is_valid = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $is_valid             = true;
    $is_saved             = false;
    $first_name_err       = '';
    $last_name_err        = '';
    $company_name_err     = '';
    $business_address_err = '';
    $email_err            = '';
    $employee_number_err  = '';
    $membership_type_err  = '';
    $agree_check_err      = '';
    $msg                  = '';

    $stripe_token = isset($_POST['stripe_token']) ? $_POST['stripe_token'] : '';

    if($stripe_token) {
        $payment_intent = retrive_payment_intent($stripe_token);

        if($payment_intent->status == 'succeeded') {

            $first_name       = isset($_POST['first_name']) ? $_POST['first_name'] : '';
            $last_name        = isset($_POST['last_name']) ? $_POST['last_name'] : '';
            $company_name     = isset($_POST["company_name"]) ? $_POST["company_name"] : '';
            $business_address = isset($_POST["business_address"]) ? $_POST["business_address"] : '';
            $email            = isset($_POST["email"]) ? $_POST["email"] : '';
            $employee_number  = isset($_POST["employee_number"]) ? $_POST["employee_number"] : '';
            $membership_type  = isset($_POST['membership_type']) ? $_POST['membership_type'] : '';
            $agree_check      = isset($_POST['agree_check']) ? $_POST['agree_check'] : '';

            if(empty($first_name)) {
                $first_name_err = 'First Name is required';
                $is_valid       = false;
            }

            if(empty($last_name)) {
                $last_name_err = 'Last Name is required';
                $is_valid      = false;
            }

            if(empty($company_name)) {
                $company_name_err = 'Company Name is required';
                $is_valid         = false;
            }

            if(empty($business_address)) {
                $business_address_err = 'Business Address is required';
                $is_valid             = false;
            }

            if(empty($email)) {
                $email_err = 'Email is required';
                $is_valid  = false;
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = 'Invalid email format';
                $is_valid  = false;
            }

            if(empty($employee_number)) {
                $employee_number_err = 'Employee Number is required';
                $is_valid            = false;
            }

            if(empty($membership_type)) {
                $membership_type_err = 'Membership type is required';
                $is_valid            = false;
            }

            if(empty($agree_check) || $agree_check == 'no') {
                $agree_check_err = 'This checked is required';
                $is_valid        = false;
            }

            if($is_valid) {
                include('DB/db_connect.php');
                $business_type              = isset($_POST['business_type']) ? $_POST['business_type'] : '';
                $establish_year             = isset($_POST['establish_year']) ? $_POST['establish_year'] : '';
                $telephone                  = isset($_POST['tel']) ? $_POST['tel'] : '';
                $mobile                     = isset($_POST['mobile']) ? $_POST['mobile'] : '';
                $fax                        = isset($_POST['fax']) ? $_POST['fax'] : '';
                $email                      = isset($_POST['email']) ? $_POST['email'] : '';
                $website                    = isset($_POST['website']) ? $_POST['website'] : '';
                $business_reference         = isset($_POST['reference']) ? $_POST['reference'] : '';
                $selected_membership_amount = isset($_POST['selected_membership_amount']) ? $_POST['selected_membership_amount'] : '';
                $shared_way                 = isset($_POST['shared_way']) ? $_POST['shared_way'] : '';

                if(is_array($shared_way)) {
                    $shared_way = implode(',', $shared_way);
                }

                $sqlquery = "INSERT INTO member_list (first_name,last_name,company_name,business_type,establish_year,membership_type,selected_membership_amount,shared_way,agree_check,telephone,business_address,mobile,fax,email,website,employee_number,business_references) VALUES ('$first_name','$last_name', '$company_name','$business_type','$establish_year','$membership_type','$selected_membership_amount','$shared_way','$agree_check','$telephone','$business_address','$mobile','$fax','$email','$website','$employee_number','$business_reference')";

                $msg = 'Sorry! Something went wrong, Please try again later.';

                if($conn->query($sqlquery) === TRUE) {
                    $is_saved = true;
                    // $_SESSION['flash_message'] = "Information inserted successfully..!";
                    $msg = "Information saved successfully..!";
                } else {
                    cancel_payment_intent($stripe_token);
                    $msg = 'Information not saved because of our server error, Please try again';
                    echo "Error: " . $sqlquery . "<br>" . $conn->error;
                }
                $conn->close();
            } else {
                cancel_payment_intent($stripe_token);
            }
        } else {
            $msg = 'Information not saved because stripe payment is not done';
        }

    } else {
        $msg          = 'Card details are invalid.';
        $stripe_token = $_SESSION['stripe_token'];
        if($stripe_token) {
            cancel_payment_intent($stripe_token);
            $msg = 'Card payment are incomplete, please try again.';
        }
    }
    $_SESSION['stripe_token'] = '';
}

$response_array = array(
    'is_valid'             => $is_valid,
    'is_saved'             => $is_saved,
    'message'              => $msg,
    'first_name_err'       => $first_name_err,
    'first_name'           => $first_name,
    'last_name'            => $last_name,
    'last_name_err'        => $last_name_err,
    'company_name_err'     => $company_name_err,
    'company_name'         => $company_name,
    'business_address_err' => $business_address_err,
    'business_address'     => $business_address,
    'email_err'            => $email_err,
    'email'                => $email,
    'employee_number_err'  => $employee_number_err,
    'employee_number'      => $employee_number,
    'membership_type_err'  => $membership_type_err,
    'membership_type'      => $membership_type,
    'agree_check_err'      => $agree_check_err,
    'agree_check'          => $agree_check,
);

header('Content-Type: application/json');
echo json_encode($response_array);



function retrive_payment_intent ($client_secret)
{
    $paymentIntent = \Stripe\PaymentIntent::retrieve($client_secret);
    return $paymentIntent;
}

function update_payment_intent ($client_secret)
{
    $paymentIntent = \Stripe\PaymentIntent::update($client_secret, [ 'metadata' => [ 'order_id' => '6735' ] ]);
    return $paymentIntent;
}

function cancel_payment_intent ($client_secret)
{
    $payment_intent = \Stripe\PaymentIntent::retrieve($client_secret);
    $payment_intent->cancel();
    return $payment_intent;
}
?>