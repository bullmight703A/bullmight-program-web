<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Dynamic Title Tag (Night Protocol Fix) -->
	<title><?php echo wp_get_document_title(); ?></title>

	<!-- SEO Meta Tags -->
	<meta name="description"
		content="The W.I.M.P.E.R. Program is a proprietary Section 125/105 chassis that engineers EBITDA expansion through FICA tax savings without reducing employee take-home pay.">
	<meta name="keywords"
		content="WIMPER, Section 125, FICA tax reduction, EBITDA recapture, corporate wealth strategy, wellness program, payroll tax savings">
	<meta name="author" content="WIMPER Financial Architecture">

	<!-- Open Graph / Social Media Meta Tags -->
	<meta property="og:title" content="W.I.M.P.E.R. | Financial Architecture & EBITDA Expansion">
	<meta property="og:description"
		content="Physical removal of payroll from the FICA taxation zone. Self-funded EBITDA recapture engineered through a compliant Section 125 chassis.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="W.I.M.P.E.R. | Financial Architecture">
	<meta name="twitter:description"
		content="Self-funded EBITDA recapture engineered through a compliant Section 125 chassis. Reduce your taxable surface area today.">

	<?php wp_head(); ?>

	<!-- Tailwind CSS CDN (Keep Below wp_head to allow enqueue overrides if needed) -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						navy: '#1e3a8a', // Corporate Royal Blue
						gold: '#0ea5e9', // Sky Blue Accent
					},
					fontFamily: {
						serif: ['Playfair Display', 'serif'],
						sans: ['Inter', 'sans-serif'],
					}
				}
			}
		}
	</script>

	<!-- Chart.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

	<!-- FontAwesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Custom Styles from User HTML -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

		body {
			font-family: 'Inter', sans-serif;
			color: #1e293b;
			background-color: #ffffff;
			overflow-x: hidden;
		}

		h1,
		h2,
		h3,
		h4,
		h5 {
			font-family: 'Inter', sans-serif;
			font-weight: 700;
			letter-spacing: -0.02em;
		}

		/* Maxwell-Inspired SaaS Palette */
		.bg-navy {
			background-color: #1e40af;
		}

		.text-accent {
			color: #3b82f6;
		}

		.bg-accent {
			background-color: #3b82f6;
		}

		.bg-soft-blue {
			background-color: #f8faff;
		}

		.border-soft {
			border-color: #e2e8f0;
		}

		/* Hero & Visuals */
		.hero-gradient {
			background: radial-gradient(circle at 70% 30%, #f0f7ff 0%, #ffffff 100%);
		}

		.card-shadow {
			box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
		}

		.btn-round {
			border-radius: 8px;
		}

		/* Navigation */
		.nav-link {
			font-size: 0.85rem;
			font-weight: 600;
			color: #64748b;
			transition: all 0.2s;
			cursor: pointer;
		}

		.nav-link:hover {
			color: #3b82f6;
		}

		.nav-link.active {
			color: #1e40af;
		}

		/* Page Transitions */
		.page-view {
			display: none;
			animation: fadeIn 0.4s ease-out;
		}

		.page-view.active {
			display: block;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(5px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Dashboard Specific Styles */
		.mock-dashboard {
			background: white;
			border-radius: 20px;
			overflow: hidden;
			border: 1px solid #e2e8f0;
			box-shadow: 0 30px 60px -12px rgba(30, 64, 175, 0.15);
		}

		.dash-step {
			border-left: 3px solid #e2e8f0;
			transition: all 0.3s;
		}

		.dash-step:hover {
			border-left-color: #3b82f6;
			background-color: #f8fafc;
		}

		.dash-step.active {
			border-left-color: #3b82f6;
			background-color: #eff6ff;
		}
	</style>
	
	<?php
	// Get Customizer settings
	$header_phone = get_theme_mod('kidazzle_footer_phone', '1 678-940-6099'); // Updated branding phone
	$header_cta_text = get_theme_mod('kidazzle_header_cta_text', 'Verify Eligibility');
	$header_cta_url = get_theme_mod('kidazzle_book_tour_url', home_url('/contact'));
	$header_scripts = get_theme_mod('kidazzle_header_scripts', '');

	// Output header scripts if set
	if (!empty($header_scripts)) {
		echo $header_scripts;
	}
	?>
</head>

<body <?php body_class('flex flex-col min-h-screen'); ?>>
	<?php wp_body_open(); ?>

	<!-- NAVIGATION -->
	<nav class="bg-white/90 backdrop-blur-md border-b border-slate-100 fixed w-full z-50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6