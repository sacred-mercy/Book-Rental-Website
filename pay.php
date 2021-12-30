<?php
  $orderData = [
    'receipt' => 'rcptid_11',
    'amount' => 39900, // 39900 rupees in paise
    'currency' => 'INR'];
  $razorpayOrder = $api->order->create($orderData);
  