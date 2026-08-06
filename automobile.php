<?php
$pageTitle = 'Signifive Automobile';
$pageDescription = 'Signifive Automobile delivers reliable automotive solutions for individuals, businesses, and corporate clients through professional vehicle sourcing, procurement, buying, selling, and fleet support.';

$division = [
  'slug' => 'automobile',
  'name' => 'Signifive Automobile',
  'heroImg' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1600',
  'heroHeading' => 'Driving Confidence Through Trusted Automotive Solutions',
  'heroCopy' => 'Signifive Automobile delivers reliable automotive solutions for individuals, businesses, and corporate clients through professional vehicle sourcing, procurement, buying, selling, and fleet support.',
  'primaryCta' => 'Get a Consultation',
  'aboutHeading' => 'Professional Automotive Solutions Built Around Trust',
  'aboutCopy' => [
    'At Signifive Automobile, we understand that purchasing, selling, or managing vehicles requires more than just transactions—it requires confidence, transparency, and the right guidance.',
    'Our division is committed to helping individuals and businesses make informed automotive decisions through reliable sourcing, professional consultation, and customer-focused service.',
    'By combining industry knowledge with a commitment to quality and integrity, Signifive Automobile strives to become a trusted partner for every stage of your automotive journey.',
  ],
  'services' => [
    ['icon'=>'🚗','title'=>'Vehicle Buying Assistance','desc'=>'Helping clients identify and purchase vehicles that match their needs, budget, and expectations.'],
    ['icon'=>'🚙','title'=>'Vehicle Selling Assistance','desc'=>'Professional support for individuals and businesses looking to sell vehicles efficiently and transparently.'],
    ['icon'=>'🔍','title'=>'Vehicle Sourcing','desc'=>'Access to reliable new and pre-owned vehicles through trusted supplier networks.'],
    ['icon'=>'🏢','title'=>'Corporate Vehicle Procurement','desc'=>'Customized procurement solutions for organizations seeking business vehicles and transportation assets.'],
    ['icon'=>'🚚','title'=>'Fleet Solutions','desc'=>'Supporting businesses with fleet planning, sourcing, and management solutions.'],
    ['icon'=>'📋','title'=>'Automotive Consultancy','desc'=>'Professional advice to help clients make informed automotive decisions.'],
  ],
  'features' => [
    ['title'=>'Trusted Guidance','desc'=>'Professional recommendations tailored to your specific requirements.'],
    ['title'=>'Transparent Process','desc'=>'Clear communication from consultation to completion.'],
    ['title'=>'Reliable Network','desc'=>'Access to trusted suppliers and industry partners.'],
    ['title'=>'Customer Commitment','desc'=>'Building relationships that extend beyond individual transactions.'],
  ],
  'process' => [
    ['title'=>'Understand Your Requirements','desc'=>'We begin by understanding your objectives, budget, and expectations.'],
    ['title'=>'Recommend the Right Solution','desc'=>'We identify the most suitable options and provide honest, professional guidance.'],
    ['title'=>'Coordinate & Deliver','desc'=>'Our team manages the process with transparency, efficiency, and attention to detail.'],
    ['title'=>'Continue Supporting You','desc'=>'Our relationship continues beyond delivery through ongoing assistance.'],
  ],
  'audiences' => [
    ['icon'=>'👤','title'=>'Individual Buyers','desc'=>'Helping customers purchase and sell vehicles with confidence.'],
    ['icon'=>'🏢','title'=>'Corporate Clients','desc'=>'Supporting fleet procurement and transportation requirements.'],
    ['icon'=>'🚚','title'=>'SMEs','desc'=>'Providing reliable vehicle sourcing for growing businesses.'],
    ['icon'=>'🤝','title'=>'Business Partners','desc'=>'Building trusted relationships across the automotive ecosystem.'],
  ],
  'ctaHeading' => "Let's Find the Right Automotive Solution Together",
  'ctaCopy' => 'Whether you\'re looking to purchase, sell, source, or manage vehicles, our team is ready to provide professional guidance and reliable support.',
];

require_once __DIR__ . '/includes/division-template.php';
