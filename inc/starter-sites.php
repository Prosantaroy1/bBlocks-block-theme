<?php
/**
 * One-click starter sites.
 *
 * Each starter site builds its pages by stacking the theme's own section
 * patterns, sets the reading settings, creates a navigation menu and can
 * optionally apply a matching style variation. Re-importing updates the
 * pages it created before instead of creating duplicates. Nothing is
 * downloaded: every page comes from patterns already bundled in the theme.
 *
 * @package bBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Starter site definitions.
 *
 * Each page is: title, list of pattern slugs stacked top to bottom (an empty
 * list makes it the posts page), page template slug. The optional 'header'
 * key names the header design applied together with the matching style.
 *
 * @return array<string, array<string, mixed>>
 */
function bblocks_starter_sites() {
	return array(
		'business'   => array(
			'title'       => __( 'Business', 'bblocks' ),
			'description' => __( 'Classic company site with a split hero, services, story, testimonials and a contact page.', 'bblocks' ),
			'style'       => '',
			'layout'      => 'business',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'     => array( __( 'Home', 'bblocks' ), array( 'hero-02', 'services-01', 'about-01', 'testimonials-01', 'cta-01' ), 'page-landing' ),
				'about'    => array( __( 'About', 'bblocks' ), array( 'about-04', 'about-03', 'team-03', 'cta-03' ), 'page-landing' ),
				'services' => array( __( 'Services', 'bblocks' ), array( 'services-03', 'features-02', 'services-02', 'cta-02' ), 'page-landing' ),
				'blog'     => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact'  => array( __( 'Contact', 'bblocks' ), array( 'contact-01' ), 'page-landing' ),
			),
		),
		'agency'     => array(
			'title'       => __( 'Creative Agency', 'bblocks' ),
			'description' => __( 'Bold gradient hero, services, process, team and a featured client quote, in the Modern style.', 'bblocks' ),
			'style'       => 'Modern',
			'layout'      => 'agency',
			'front'       => 'home',
			'posts'       => 'journal',
			'pages'       => array(
				'home'     => array( __( 'Home', 'bblocks' ), array( 'hero-03', 'services-02', 'portfolio-01', 'features-02', 'testimonials-03', 'cta-02' ), 'page-landing' ),
				'about'    => array( __( 'About', 'bblocks' ), array( 'about-01', 'about-03', 'team-01' ), 'page-landing' ),
				'services' => array( __( 'Services', 'bblocks' ), array( 'services-01', 'features-03', 'cta-01' ), 'page-landing' ),
				'journal'  => array( __( 'Journal', 'bblocks' ), array(), '' ),
				'contact'  => array( __( 'Contact', 'bblocks' ), array( 'contact-02' ), 'page-landing' ),
			),
		),
		'saas'       => array(
			'title'       => __( 'SaaS Product', 'bblocks' ),
			'description' => __( 'Product landing page with features, social proof and pricing, plus Features, Pricing and About pages.', 'bblocks' ),
			'style'       => '',
			'layout'      => 'saas',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'     => array( __( 'Home', 'bblocks' ), array( 'hero-01', 'features-01', 'features-02', 'testimonials-01', 'pricing-01', 'cta-01' ), 'page-landing' ),
				'features' => array( __( 'Features', 'bblocks' ), array( 'features-04', 'features-05', 'features-03', 'cta-03' ), 'page-landing' ),
				'pricing'  => array( __( 'Pricing', 'bblocks' ), array( 'pricing-03', 'faq-01', 'testimonials-02', 'cta-02' ), 'page-landing' ),
				'about'    => array( __( 'About', 'bblocks' ), array( 'about-02', 'team-02' ), 'page-landing' ),
				'blog'     => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact'  => array( __( 'Contact', 'bblocks' ), array( 'contact-02' ), 'page-landing' ),
			),
		),
		'freelancer' => array(
			'title'       => __( 'Freelancer', 'bblocks' ),
			'description' => __( 'Personal one-person studio: minimal hero, services, about, a client quote and recent writing, in the Dark style.', 'bblocks' ),
			'style'       => 'Dark',
			'layout'      => 'freelancer',
			'front'       => 'home',
			'posts'       => 'writing',
			'pages'       => array(
				'home'    => array( __( 'Home', 'bblocks' ), array( 'hero-04', 'services-03', 'about-02', 'testimonials-02', 'blog-03', 'cta-03' ), 'page-landing' ),
				'pricing' => array( __( 'Pricing', 'bblocks' ), array( 'pricing-02', 'faq-01', 'cta-02' ), 'page-landing' ),
				'writing' => array( __( 'Writing', 'bblocks' ), array(), '' ),
				'contact' => array( __( 'Contact', 'bblocks' ), array( 'contact-01' ), 'page-landing' ),
			),
		),
		'architecture' => array(
			'title'       => __( 'Nirman Architecture', 'bblocks' ),
			'description' => __( 'Architecture studio with a dark city hero, stats, zig-zag expertise, project grid, architects, feedback, blog and a split contact section.', 'bblocks' ),
			'style'       => 'Nirman',
			'layout'      => 'architecture',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'      => array( __( 'Home', 'bblocks' ), array( 'site-architecture-hero', 'site-architecture-about', 'site-architecture-expertise', 'site-architecture-portfolio', 'site-architecture-team', 'site-architecture-testimonial', 'site-architecture-blog', 'site-architecture-contact' ), 'page-landing' ),
				'about'     => array( __( 'About Us', 'bblocks' ), array( 'site-architecture-about', 'site-architecture-expertise', 'site-architecture-team', 'site-architecture-testimonial' ), 'page-landing' ),
				'portfolio' => array( __( 'Portfolio', 'bblocks' ), array( 'site-architecture-portfolio', 'site-architecture-contact' ), 'page-landing' ),
				'blog'      => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact'   => array( __( 'Contact', 'bblocks' ), array( 'site-architecture-contact' ), 'page-landing' ),
			),
		),
		'marketplace'  => array(
			'title'       => __( 'DigiMagnet Marketplace', 'bblocks' ),
			'description' => __( 'Theme and template marketplace with a showcase hero, stats, product grid with search, reviews hub, dark gallery, FAQ, blog and newsletter.', 'bblocks' ),
			'style'       => 'DigiMagnet',
			'layout'      => 'marketplace',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'   => array( __( 'Home', 'bblocks' ), array( 'site-marketplace-hero', 'site-marketplace-stats', 'site-marketplace-themes', 'site-marketplace-reviews', 'site-marketplace-gallery', 'site-marketplace-faq', 'site-marketplace-blog', 'site-marketplace-newsletter' ), 'page-landing' ),
				'themes' => array( __( 'Browse Themes', 'bblocks' ), array( 'site-marketplace-themes', 'site-marketplace-gallery', 'site-marketplace-newsletter' ), 'page-landing' ),
				'faq'    => array( __( 'FAQ', 'bblocks' ), array( 'site-marketplace-faq', 'site-marketplace-reviews' ), 'page-landing' ),
				'blog'   => array( __( 'Blog', 'bblocks' ), array(), '' ),
			),
		),
		'resort'       => array(
			'title'       => __( 'Naturexplo Eco Resort', 'bblocks' ),
			'description' => __( 'Nature retreat with a giant-wordmark hero, cottages, places, rooms, dining, activities, guest stories and a booking call to action.', 'bblocks' ),
			'style'       => 'Naturexplo',
			'layout'      => 'resort',
			'front'       => 'home',
			'posts'       => 'journal',
			'pages'       => array(
				'home'    => array( __( 'Home', 'bblocks' ), array( 'site-resort-hero', 'site-resort-about', 'site-resort-cottage', 'site-resort-places', 'site-resort-accommodation', 'site-resort-dining', 'site-resort-activities', 'site-resort-statement', 'site-resort-stories', 'site-resort-cta' ), 'page-landing' ),
				'stay'    => array( __( 'Stay', 'bblocks' ), array( 'site-resort-cottage', 'site-resort-accommodation', 'site-resort-places', 'site-resort-cta' ), 'page-landing' ),
				'dining'  => array( __( 'Dining & Activities', 'bblocks' ), array( 'site-resort-dining', 'site-resort-activities', 'site-resort-statement' ), 'page-landing' ),
				'journal' => array( __( 'Journal', 'bblocks' ), array(), '' ),
				'contact' => array( __( 'Contact', 'bblocks' ), array( 'site-resort-stories', 'contact-01' ), 'page-landing' ),
			),
		),
		'spa'          => array(
			'title'       => __( 'Sweet Pixie Spa', 'bblocks' ),
			'description' => __( 'Spa and wellness site with a calm hero, zig-zag treatments with faded words, a purple about and experts band, reviews, gallery and contact.', 'bblocks' ),
			'style'       => 'Sweet Pixie',
			'layout'      => 'spa',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'     => array( __( 'Home', 'bblocks' ), array( 'site-spa-hero', 'site-spa-services', 'site-spa-about', 'site-spa-testimonial', 'site-spa-gallery', 'site-spa-contact' ), 'page-landing' ),
				'services' => array( __( 'Services', 'bblocks' ), array( 'site-spa-services', 'site-spa-contact' ), 'page-landing' ),
				'about'    => array( __( 'About', 'bblocks' ), array( 'site-spa-about', 'site-spa-testimonial' ), 'page-landing' ),
				'gallery'  => array( __( 'Gallery', 'bblocks' ), array( 'site-spa-gallery' ), 'page-landing' ),
				'blog'     => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact'  => array( __( 'Contact', 'bblocks' ), array( 'site-spa-contact' ), 'page-landing' ),
			),
		),
		'consulting'   => array(
			'title'       => __( 'Conselta Consulting', 'bblocks' ),
			'description' => __( 'Personal consultant site with a dark portrait hero, numbered services card, client story, dark pricing table, FAQ, topic strip, blog and social links.', 'bblocks' ),
			'style'       => 'Conselta',
			'layout'      => 'consulting',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'     => array( __( 'Home', 'bblocks' ), array( 'site-consulting-hero', 'site-consulting-intro', 'site-consulting-services', 'site-consulting-testimonial', 'site-consulting-pricing', 'site-consulting-faq', 'site-consulting-marquee', 'site-consulting-blog', 'site-consulting-connect' ), 'page-landing' ),
				'services' => array( __( 'Services', 'bblocks' ), array( 'site-consulting-services', 'site-consulting-testimonial', 'site-consulting-connect' ), 'page-landing' ),
				'pricing'  => array( __( 'Pricing', 'bblocks' ), array( 'site-consulting-pricing', 'site-consulting-faq' ), 'page-landing' ),
				'blog'     => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact'  => array( __( 'Contact', 'bblocks' ), array( 'site-consulting-intro', 'site-consulting-connect' ), 'page-landing' ),
			),
		),
		'magazine'     => array(
			'title'       => __( 'Daily Ink Magazine', 'bblocks' ),
			'description' => __( 'News and magazine blog with a lead-story hero, latest stories grid, numbered trending list, editor\'s picks band, newsletter signup and an editorial team page.', 'bblocks' ),
			'style'       => 'Daily Ink',
			'header'      => 'header-search',
			'layout'      => 'consulting',
			'front'       => 'home',
			'posts'       => 'stories',
			'pages'       => array(
				'home'    => array( __( 'Home', 'bblocks' ), array( 'site-magazine-hero', 'site-magazine-latest', 'site-magazine-trending', 'site-magazine-picks', 'site-magazine-newsletter' ), 'page-landing' ),
				'about'   => array( __( 'About', 'bblocks' ), array( 'site-magazine-team', 'site-magazine-picks', 'site-magazine-newsletter' ), 'page-landing' ),
				'stories' => array( __( 'Stories', 'bblocks' ), array(), '' ),
				'contact' => array( __( 'Contact', 'bblocks' ), array( 'contact-01' ), 'page-landing' ),
			),
		),
		'restaurant'   => array(
			'title'       => __( 'Savora Restaurant', 'bblocks' ),
			'description' => __( 'Warm restaurant site with a dining photo hero, story and stats, a three-course menu, chef specials, guest reviews, gallery and opening hours with booking.', 'bblocks' ),
			'style'       => 'Savora',
			'header'      => 'header-cta',
			'layout'      => 'resort',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'         => array( __( 'Home', 'bblocks' ), array( 'site-restaurant-hero', 'site-restaurant-about', 'site-restaurant-specials', 'site-restaurant-menu', 'site-restaurant-testimonials', 'site-restaurant-gallery', 'site-restaurant-visit' ), 'page-landing' ),
				'menu'         => array( __( 'Menu', 'bblocks' ), array( 'site-restaurant-menu', 'site-restaurant-specials', 'site-restaurant-visit' ), 'page-landing' ),
				'about'        => array( __( 'About', 'bblocks' ), array( 'site-restaurant-about', 'site-restaurant-gallery', 'site-restaurant-testimonials' ), 'page-landing' ),
				'reservations' => array( __( 'Reservations', 'bblocks' ), array( 'site-restaurant-visit', 'site-restaurant-testimonials' ), 'page-landing' ),
				'blog'         => array( __( 'Blog', 'bblocks' ), array(), '' ),
			),
		),
		'photography'  => array(
			'title'       => __( 'Lumen Photography Studio', 'bblocks' ),
			'description' => __( 'Dark photographer portfolio with a full-height landscape hero, captioned gallery, session packages, an about section with signature, client words and a booking call to action.', 'bblocks' ),
			'style'       => 'Lumen',
			'header'      => 'header',
			'layout'      => 'architecture',
			'front'       => 'home',
			'posts'       => 'journal',
			'pages'       => array(
				'home'      => array( __( 'Home', 'bblocks' ), array( 'site-photography-hero', 'site-photography-portfolio', 'site-photography-about', 'site-photography-packages', 'site-photography-testimonials', 'site-photography-contact' ), 'page-landing' ),
				'portfolio' => array( __( 'Portfolio', 'bblocks' ), array( 'site-photography-portfolio', 'site-photography-testimonials', 'site-photography-contact' ), 'page-landing' ),
				'packages'  => array( __( 'Packages', 'bblocks' ), array( 'site-photography-packages', 'site-photography-testimonials', 'site-photography-contact' ), 'page-landing' ),
				'about'     => array( __( 'About', 'bblocks' ), array( 'site-photography-about', 'site-photography-testimonials' ), 'page-landing' ),
				'contact'   => array( __( 'Contact', 'bblocks' ), array( 'site-photography-contact', 'site-photography-packages' ), 'page-landing' ),
				'journal'   => array( __( 'Journal', 'bblocks' ), array(), '' ),
			),
		),
		'education'    => array(
			'title'       => __( 'Edunova Academy', 'bblocks' ),
			'description' => __( 'Online academy with a split hero, course grid, benefits, instructors, a library stats band, membership plans, student stories, FAQ and contact.', 'bblocks' ),
			'style'       => 'Edunova',
			'header'      => 'header-cta',
			'layout'      => 'saas',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'    => array( __( 'Home', 'bblocks' ), array( 'site-education-hero', 'site-education-courses', 'site-education-features', 'site-education-stats', 'site-education-instructors', 'site-education-testimonials', 'site-education-pricing', 'site-education-faq' ), 'page-landing' ),
				'courses' => array( __( 'Courses', 'bblocks' ), array( 'site-education-courses', 'site-education-features', 'site-education-testimonials', 'site-education-faq' ), 'page-landing' ),
				'pricing' => array( __( 'Pricing', 'bblocks' ), array( 'site-education-pricing', 'site-education-stats', 'site-education-faq' ), 'page-landing' ),
				'about'   => array( __( 'About', 'bblocks' ), array( 'site-education-features', 'site-education-stats', 'site-education-instructors', 'site-education-testimonials' ), 'page-landing' ),
				'contact' => array( __( 'Contact', 'bblocks' ), array( 'site-education-contact', 'site-education-faq' ), 'page-landing' ),
				'blog'    => array( __( 'Blog', 'bblocks' ), array(), '' ),
			),
		),
		'fitness'      => array(
			'title'       => __( 'Pulsefit Gym', 'bblocks' ),
			'description' => __( 'Bold dark gym site with a photo hero, programs, a weekly class timetable, trainers, results, membership plans and a free-trial call to action.', 'bblocks' ),
			'style'       => 'Pulsefit',
			'header'      => 'header-cta',
			'layout'      => 'agency',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'       => array( __( 'Home', 'bblocks' ), array( 'site-fitness-hero', 'site-fitness-programs', 'site-fitness-stats', 'site-fitness-schedule', 'site-fitness-trainers', 'site-fitness-pricing', 'site-fitness-cta' ), 'page-landing' ),
				'programs'   => array( __( 'Programs', 'bblocks' ), array( 'site-fitness-programs', 'site-fitness-trainers', 'site-fitness-cta' ), 'page-landing' ),
				'schedule'   => array( __( 'Schedule', 'bblocks' ), array( 'site-fitness-schedule', 'site-fitness-cta' ), 'page-landing' ),
				'membership' => array( __( 'Membership', 'bblocks' ), array( 'site-fitness-pricing', 'site-fitness-stats', 'site-fitness-cta' ), 'page-landing' ),
				'contact'    => array( __( 'Contact', 'bblocks' ), array( 'site-fitness-contact' ), 'page-landing' ),
				'blog'       => array( __( 'Blog', 'bblocks' ), array(), '' ),
			),
		),
		'realestate'   => array(
			'title'       => __( 'Homely Realty', 'bblocks' ),
			'description' => __( 'Real estate agency with a photo hero and property search, featured listings, services, why-us stats, agents, neighborhoods, reviews and a free valuation call to action.', 'bblocks' ),
			'style'       => 'Homely',
			'header'      => 'header-topbar',
			'layout'      => 'architecture',
			'front'       => 'home',
			'posts'       => 'news',
			'pages'       => array(
				'home'       => array( __( 'Home', 'bblocks' ), array( 'site-realestate-hero', 'site-realestate-listings', 'site-realestate-services', 'site-realestate-about', 'site-realestate-neighborhoods', 'site-realestate-agents', 'site-realestate-testimonials', 'site-realestate-cta' ), 'page-landing' ),
				'properties' => array( __( 'Properties', 'bblocks' ), array( 'site-realestate-listings', 'site-realestate-neighborhoods', 'site-realestate-cta' ), 'page-landing' ),
				'services'   => array( __( 'Services', 'bblocks' ), array( 'site-realestate-services', 'site-realestate-about', 'site-realestate-testimonials', 'site-realestate-cta' ), 'page-landing' ),
				'agents'     => array( __( 'Agents', 'bblocks' ), array( 'site-realestate-agents', 'site-realestate-testimonials' ), 'page-landing' ),
				'news'       => array( __( 'News', 'bblocks' ), array(), '' ),
				'contact'    => array( __( 'Contact', 'bblocks' ), array( 'site-realestate-cta', 'contact-01' ), 'page-landing' ),
			),
		),
		'shop'         => array(
			'title'       => __( 'Shoplane Store', 'bblocks' ),
			'description' => __( 'Online store showcase with a split product hero, categories, product grid, sale banner, store perks, reviews and a newsletter sign-up. No shop plugin required.', 'bblocks' ),
			'style'       => 'Shoplane',
			'header'      => 'header-search',
			'layout'      => 'marketplace',
			'front'       => 'home',
			'posts'       => 'blog',
			'pages'       => array(
				'home'    => array( __( 'Home', 'bblocks' ), array( 'site-shop-hero', 'site-shop-categories', 'site-shop-products', 'site-shop-promo', 'site-shop-features', 'site-shop-testimonials', 'site-shop-newsletter' ), 'page-landing' ),
				'shop'    => array( __( 'Shop', 'bblocks' ), array( 'site-shop-products', 'site-shop-categories', 'site-shop-promo', 'site-shop-features' ), 'page-landing' ),
				'about'   => array( __( 'About', 'bblocks' ), array( 'site-shop-about', 'site-shop-features', 'site-shop-testimonials', 'site-shop-newsletter' ), 'page-landing' ),
				'blog'    => array( __( 'Blog', 'bblocks' ), array(), '' ),
				'contact' => array( __( 'Contact', 'bblocks' ), array( 'contact-01', 'site-shop-features' ), 'page-landing' ),
			),
		),
		'medical'      => array(
			'title'       => __( 'Carely Clinic', 'bblocks' ),
			'description' => __( 'Medical and dental clinic with a split hero, department grid, why-choose-us stats, doctors, opening hours and emergency band, patient reviews, FAQ and an appointment call to action.', 'bblocks' ),
			'style'       => 'Carely',
			'header'      => 'header-topbar',
			'layout'      => 'spa',
			'front'       => 'home',
			'posts'       => 'health-blog',
			'pages'       => array(
				'home'        => array( __( 'Home', 'bblocks' ), array( 'site-medical-hero', 'site-medical-services', 'site-medical-why', 'site-medical-doctors', 'site-medical-hours', 'site-medical-testimonials', 'site-medical-faq', 'site-medical-cta' ), 'page-landing' ),
				'services'    => array( __( 'Services', 'bblocks' ), array( 'site-medical-services', 'site-medical-hours', 'site-medical-faq', 'site-medical-cta' ), 'page-landing' ),
				'doctors'     => array( __( 'Doctors', 'bblocks' ), array( 'site-medical-doctors', 'site-medical-testimonials', 'site-medical-cta' ), 'page-landing' ),
				'about'       => array( __( 'About', 'bblocks' ), array( 'site-medical-why', 'site-medical-doctors', 'site-medical-testimonials' ), 'page-landing' ),
				'health-blog' => array( __( 'Health Blog', 'bblocks' ), array(), '' ),
				'contact'     => array( __( 'Contact', 'bblocks' ), array( 'site-medical-hours', 'site-medical-faq' ), 'page-landing' ),
			),
		),
		'law'          => array(
			'title'       => __( 'Justica Law', 'bblocks' ),
			'description' => __( 'Law firm site with a dark library hero, practice areas, firm story and stats, our approach, attorneys, case results, client testimonials and a free consultation with FAQ.', 'bblocks' ),
			'style'       => 'Justica',
			'header'      => 'header-topbar',
			'layout'      => 'consulting',
			'front'       => 'home',
			'posts'       => 'insights',
			'pages'       => array(
				'home'           => array( __( 'Home', 'bblocks' ), array( 'site-law-hero', 'site-law-practice', 'site-law-about', 'site-law-results', 'site-law-attorneys', 'site-law-testimonials', 'site-law-consultation' ), 'page-landing' ),
				'practice-areas' => array( __( 'Practice Areas', 'bblocks' ), array( 'site-law-practice', 'site-law-approach', 'site-law-results', 'site-law-consultation' ), 'page-landing' ),
				'attorneys'      => array( __( 'Attorneys', 'bblocks' ), array( 'site-law-attorneys', 'site-law-testimonials' ), 'page-landing' ),
				'about'          => array( __( 'About', 'bblocks' ), array( 'site-law-about', 'site-law-approach', 'site-law-attorneys' ), 'page-landing' ),
				'insights'       => array( __( 'Insights', 'bblocks' ), array(), '' ),
				'contact'        => array( __( 'Contact', 'bblocks' ), array( 'site-law-consultation' ), 'page-landing' ),
			),
		),
	);
}

/**
 * Design tokens (colors, button radius) for a starter site preview.
 *
 * Read from theme.json and the starter site's style variation, so the
 * dashboard card always matches what the import will actually look like.
 *
 * @param string $style Style variation title, or '' for the default style.
 * @return array<string, string>
 */
function bblocks_starter_site_tokens( $style ) {
	static $base = null;

	if ( null === $base ) {
		$base = wp_json_file_decode( get_theme_file_path( 'theme.json' ), array( 'associative' => true ) );
		$base = is_array( $base ) ? $base : array();
	}

	$data = $base;

	if ( $style ) {
		foreach ( WP_Theme_JSON_Resolver::get_style_variations() as $variation ) {
			if ( isset( $variation['title'] ) && $variation['title'] === $style ) {
				$data = array_replace_recursive( $base, $variation );

				// Presets are replaced, not merged; newer WordPress versions also
				// key them by origin ("theme"), like Global Styles does.
				if ( isset( $variation['settings']['color']['palette'] ) ) {
					$palette                              = $variation['settings']['color']['palette'];
					$data['settings']['color']['palette'] = isset( $palette['theme'] ) ? $palette['theme'] : $palette;
				}
				break;
			}
		}
	}

	$colors = array();
	foreach ( isset( $data['settings']['color']['palette'] ) ? $data['settings']['color']['palette'] : array() as $color ) {
		if ( isset( $color['slug'], $color['color'] ) ) {
			$colors[ $color['slug'] ] = $color['color'];
		}
	}

	$radius = isset( $data['styles']['elements']['button']['border']['radius'] ) ? $data['styles']['elements']['button']['border']['radius'] : '0.5rem';

	return array(
		'background' => isset( $colors['background'] ) ? $colors['background'] : '#ffffff',
		'surface'    => isset( $colors['surface'] ) ? $colors['surface'] : '#f5f6f8',
		'text'       => isset( $colors['foreground'] ) ? $colors['foreground'] : '#14171a',
		'muted'      => isset( $colors['muted-text'] ) ? $colors['muted-text'] : '#666e75',
		'primary'    => isset( $colors['primary'] ) ? $colors['primary'] : '#2954e3',
		'secondary'  => isset( $colors['secondary'] ) ? $colors['secondary'] : '#0ea5a4',
		'radius'     => is_string( $radius ) ? $radius : '0.5rem',
	);
}

/**
 * Build a page's content by stacking registered theme patterns.
 *
 * @param string[] $slugs Pattern slugs without the "bblocks/" prefix.
 * @return string
 */
function bblocks_starter_page_content( $slugs ) {
	$registry = WP_Block_Patterns_Registry::get_instance();
	$content  = array();

	foreach ( $slugs as $slug ) {
		$pattern = $registry->get_registered( 'bblocks/' . $slug );

		if ( $pattern && ! empty( $pattern['content'] ) ) {
			$content[] = $pattern['content'];
		}
	}

	return implode( "\n\n", $content );
}

/**
 * Apply a theme style variation (or reset to the default style) in the
 * user's Global Styles, exactly like picking it in Styles → Browse styles.
 *
 * @param string $title Variation title, or '' for the theme's default style.
 * @return bool
 */
function bblocks_apply_style_variation( $title ) {
	$variation = array(
		'title'    => __( 'Default', 'bblocks' ),
		'settings' => array(),
		'styles'   => array(),
	);

	if ( $title ) {
		$variation = null;

		foreach ( WP_Theme_JSON_Resolver::get_style_variations() as $candidate ) {
			if ( isset( $candidate['title'] ) && $candidate['title'] === $title ) {
				$variation = $candidate;
				break;
			}
		}

		if ( ! $variation ) {
			return false;
		}
	}

	$settings = isset( $variation['settings'] ) ? $variation['settings'] : array();
	$presets  = array(
		array( 'color', 'palette' ),
		array( 'color', 'gradients' ),
		array( 'typography', 'fontFamilies' ),
		array( 'typography', 'fontSizes' ),
	);

	foreach ( $presets as $path ) {
		if ( isset( $settings[ $path[0] ][ $path[1] ][0] ) ) {
			$settings[ $path[0] ][ $path[1] ] = array( 'theme' => $settings[ $path[0] ][ $path[1] ] );
		}
	}

	$user_styles = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true );

	if ( empty( $user_styles['ID'] ) ) {
		return false;
	}

	$data = array(
		'version'                     => WP_Theme_JSON::LATEST_SCHEMA,
		'isGlobalStylesUserThemeJSON' => true,
		'title'                       => $variation['title'],
		'settings'                    => (object) $settings,
		'styles'                      => (object) ( isset( $variation['styles'] ) ? $variation['styles'] : array() ),
	);

	$result = wp_update_post(
		array(
			'ID'           => $user_styles['ID'],
			'post_content' => wp_slash( wp_json_encode( $data ) ),
		),
		true
	);

	if ( is_wp_error( $result ) ) {
		return false;
	}

	WP_Theme_JSON_Resolver::clean_cached_data();

	return true;
}

/**
 * Create or update the navigation menu used by the header's Navigation
 * block. The header block has no fixed menu, so it shows the most recent
 * published menu — this one — until the user picks another.
 *
 * @param int[] $page_ids Page IDs keyed by page key, in menu order.
 * @param int   $front_id Front page ID (shown as "Home").
 * @return int Menu ID, or 0 on failure.
 */
function bblocks_import_starter_menu( $page_ids, $front_id ) {
	$content = '';

	foreach ( $page_ids as $page_id ) {
		$content .= get_comment_delimited_block_content(
			'core/navigation-link',
			array(
				'label' => $page_id === $front_id ? __( 'Home', 'bblocks' ) : get_the_title( $page_id ),
				'type'  => 'page',
				'id'    => (int) $page_id,
				'url'   => $page_id === $front_id ? home_url( '/' ) : get_permalink( $page_id ),
				'kind'  => 'post-type',
			),
			''
		);
	}

	$menu_id = (int) get_option( 'bblocks_starter_menu', 0 );
	$postarr = array(
		'post_title'   => __( 'Starter site menu', 'bblocks' ),
		'post_content' => wp_slash( $content ),
		'post_status'  => 'publish',
		'post_type'    => 'wp_navigation',
	);

	if ( $menu_id && 'wp_navigation' === get_post_type( $menu_id ) && 'trash' !== get_post_status( $menu_id ) ) {
		$postarr['ID'] = $menu_id;
		$menu_id       = wp_update_post( $postarr, true );
	} else {
		$menu_id = wp_insert_post( $postarr, true );
	}

	if ( is_wp_error( $menu_id ) ) {
		return 0;
	}

	update_option( 'bblocks_starter_menu', (int) $menu_id, false );

	return (int) $menu_id;
}

/**
 * Import a starter site.
 *
 * @param string $slug        Starter site key.
 * @param bool   $apply_style Whether to apply the matching style variation.
 * @param bool   $with_menu   Whether to create the navigation menu.
 * @return array|WP_Error Summary on success.
 */
function bblocks_import_starter_site( $slug, $apply_style = false, $with_menu = true ) {
	$sites = bblocks_starter_sites();

	if ( ! isset( $sites[ $slug ] ) ) {
		return new WP_Error( 'bblocks_unknown_site', __( 'Unknown starter site.', 'bblocks' ) );
	}

	$site     = $sites[ $slug ];
	$imported = get_option( 'bblocks_imported_pages', array() );
	$imported = is_array( $imported ) ? $imported : array();
	$page_ids = array();

	foreach ( $site['pages'] as $key => $page ) {
		list( $title, $patterns, $template ) = $page;

		$existing = isset( $imported[ $slug ][ $key ] ) ? get_post( $imported[ $slug ][ $key ] ) : null;
		$postarr  = array(
			'post_title'   => $title,
			'post_content' => wp_slash( bblocks_starter_page_content( $patterns ) ),
			'post_status'  => 'publish',
			'post_type'    => 'page',
		);

		if ( $existing && 'page' === $existing->post_type && 'trash' !== $existing->post_status ) {
			$postarr['ID'] = $existing->ID;
			$page_id       = wp_update_post( $postarr, true );
		} else {
			$page_id = wp_insert_post( $postarr, true );
		}

		if ( is_wp_error( $page_id ) ) {
			return $page_id;
		}

		if ( $template ) {
			update_post_meta( $page_id, '_wp_page_template', $template );
		} else {
			delete_post_meta( $page_id, '_wp_page_template' );
		}

		$page_ids[ $key ] = (int) $page_id;
	}

	$imported[ $slug ] = $page_ids;
	update_option( 'bblocks_imported_pages', $imported, false );

	$front_id = isset( $page_ids[ $site['front'] ] ) ? $page_ids[ $site['front'] ] : 0;

	if ( $front_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_id );
		update_option( 'page_for_posts', isset( $page_ids[ $site['posts'] ] ) ? $page_ids[ $site['posts'] ] : 0 );
	}

	if ( $with_menu ) {
		bblocks_import_starter_menu( $page_ids, $front_id );
	}

	$style_applied = false;
	if ( $apply_style ) {
		$style_applied = bblocks_apply_style_variation( $site['style'] );

		if ( function_exists( 'bblocks_apply_part_design' ) ) {
			bblocks_apply_part_design( 'header', isset( $site['header'] ) ? $site['header'] : 'header' );
		}
	}

	return array(
		'pages'         => count( $page_ids ),
		'style_applied' => $style_applied,
	);
}

/**
 * AJAX: import a starter site from the dashboard.
 */
function bblocks_ajax_import_starter_site() {
	check_ajax_referer( 'bblocks_starter_nonce', 'security' );

	if ( ! current_user_can( 'edit_theme_options' ) || ! current_user_can( 'publish_pages' ) || ! current_user_can( 'manage_options' ) ) {
		wp_send_json_error( array( 'message' => __( 'You are not allowed to import starter sites.', 'bblocks' ) ), 403 );
	}

	$slug        = isset( $_POST['site'] ) ? sanitize_key( wp_unslash( $_POST['site'] ) ) : '';
	$apply_style = ! empty( $_POST['apply_style'] );
	$with_menu   = ! empty( $_POST['with_menu'] );
	$result      = bblocks_import_starter_site( $slug, $apply_style, $with_menu );

	if ( is_wp_error( $result ) ) {
		wp_send_json_error( array( 'message' => $result->get_error_message() ) );
	}

	$page_count = (int) $result['pages'];
	$message    = sprintf(
		/* translators: %d: number of pages created or updated. */
		_n( 'Starter site imported: %d page created or updated.', 'Starter site imported: %d pages created or updated.', $page_count, 'bblocks' ),
		$page_count
	);

	if ( $result['style_applied'] ) {
		$message .= ' ' . __( 'The matching style was applied.', 'bblocks' );
	}

	wp_send_json_success(
		array(
			'message' => $message,
			'url'     => home_url( '/' ),
		)
	);
}
add_action( 'wp_ajax_bblocks_import_starter_site', 'bblocks_ajax_import_starter_site' );
