<?php
    // echo "<pre>"; print_r($_POST); echo "</pre>"; exit();
    session_start();
    include('vendor/stripe-php/init.php');
    \Stripe\Stripe::setApiKey('sk_test_51Gs90iG29g7sUkRNYVsbNOvdiMGAI7oI1RKFgQI6JOGcGKHpGSKJXPlkBjTFOPko6hgCSBhDbCRGCbD5acKFXiGO00jAauWJ5S');

    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;
    list($publishable_key,$client_secret,$token) = create_payment_intent($amount);
    $_SESSION['stripe_token'] = $token;

    $response_array = array(
        'publishableKey'=>$publishable_key,
        'clientSecret'=>$client_secret,
        'token'=>$token,
    );

    header('Content-Type: application/json');
    echo json_encode($response_array);

    function create_payment_intent($amount) {
        $publishable_key = 'pk_test_51Gs90iG29g7sUkRNQlMH6Fa1r98ykHh52E5gRqX7S2H1d13285TQ0KIlXTlPba02M2h4YKC1a8thuMiSGBGbowcb00SHObIYnt';
        $client_secret = '';
        $token = '';
        $amount = round($amount,2) * 100;
        $paymentIntent = \Stripe\PaymentIntent::create(['amount' => $amount,'currency' => 'GBP',]);

        if ($paymentIntent) {
            $client_secret = $paymentIntent->client_secret;
            $token = $paymentIntent->id;
        }
        return [$publishable_key,$client_secret,$token];
    }
?>
