# Backpack E-Commerce Landing Page

A WordPress-based e-commerce landing page for a backpack online store. Built with Elementor, WooCommerce, and the Blocksy theme.

---

## Preview

![screenshot of full landing page]([screenshots/landing-page-full.png](https://karangreksa.site/wp-content/uploads/2024/11/ksnip_20241126-110527.png))

---

## About This Project

This is a landing page for a backpack store that sells products online. Customers can browse the collection, see discounts, and complete purchases directly on the site.

**Live demo environment:** Local (built using LocalWP)

---

## Page Sections

### 1. Hero Section
The first thing visitors see — a big headline, short description, and a call-to-action button.

![screenshot of hero section](screenshots/hero-section.png)

---

### 2. About / Brand Section
A section that builds trust by introducing the brand and what makes it different.

![screenshot of about section](screenshots/about-section.png)

---

### 3. Discount Banner
A promotional banner highlighting the current deal (e.g., 70% OFF).

![screenshot of discount banner](screenshots/discount-banner.png)

---

### 4. Backpack Types
A breakdown of the different backpack categories available in the store.

![screenshot of backpack types section](screenshots/backpack-types.png)

---

### 5. Featured Products
A grid of on-sale products pulled automatically from WooCommerce.

![screenshot of featured products](screenshots/featured-products.png)

---

### 6. Deal of the Day
A highlighted single deal with a countdown or promotional push.

![screenshot of deal of the day](screenshots/deal-of-the-day.png)

---

### 7. Popular Backpacks
Top-rated products sorted by customer rating.

![screenshot of popular backpacks](screenshots/popular-backpacks.png)

---

### 8. Testimonials
Customer reviews displayed with photos and names.

![screenshot of testimonials section](screenshots/testimonials.png)

---

## Tech Stack

| Layer | Tool |
|---|---|
| Platform | WordPress |
| Theme | Blocksy + Blocksy Child Theme |
| Page Builder | Elementor |
| E-Commerce | WooCommerce |
| Payment Gateway | Midtrans |
| Shipping | Ongkoskirim.id |
| Contact Form | WPForms Lite |
| Extra Components | Essential Addons for Elementor, Blocksy Companion, Jetpack |

---

## Plugins Used

- **WooCommerce** — manages products, cart, and checkout
- **Elementor** — drag-and-drop page builder
- **Midtrans for WooCommerce** — handles online payments
- **Ongkoskirim.id** — calculates real-time shipping costs
- **WPForms Lite** — contact/inquiry forms
- **Essential Addons for Elementor** — extra design elements
- **Blocksy Companion** — unlocks extra Blocksy theme features
- **Jetpack** — site performance and security tools

---

## How to Run Locally

> This project was built and tested using [LocalWP](https://localwp.com/).

1. Install [LocalWP](https://localwp.com/) on your computer
2. Create a new site in LocalWP
3. Replace the `app/public/` folder with this project's files
4. Import `app/sql/local.sql` into the database using **Adminer** (available inside LocalWP)
5. Open the site in your browser

---

## Folder Structure

```
ecommerce/
├── app/
│   ├── public/          # WordPress installation
│   │   ├── wp-content/
│   │   │   ├── themes/  # Blocksy + child theme
│   │   │   └── plugins/ # All installed plugins
│   └── sql/
│       └── local.sql    # Database export
└── conf/                # Server config (Nginx, PHP, MySQL)
```

---

## What I Learned

- Setting up a WooCommerce store from scratch
- Building landing page layouts using Elementor
- Integrating a local payment gateway (Midtrans)
- Using a child theme to keep customizations safe
- Configuring shipping cost integration for local delivery

---

## Screenshots

> Replace the placeholder paths above with your actual screenshots.
> Recommended tool: take screenshots using your browser, then save them inside a `screenshots/` folder in this project.

| What to capture | Suggested filename |
|---|---|
| Full landing page | `screenshots/landing-page-full.png` |
| Hero section | `screenshots/hero-section.png` |
| About section | `screenshots/about-section.png` |
| Discount banner | `screenshots/discount-banner.png` |
| Backpack types | `screenshots/backpack-types.png` |
| Featured products | `screenshots/featured-products.png` |
| Deal of the day | `screenshots/deal-of-the-day.png` |
| Popular backpacks | `screenshots/popular-backpacks.png` |
| Testimonials | `screenshots/testimonials.png` |

---

## License

This project is for learning and portfolio purposes.
