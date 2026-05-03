# Loveseen — Refero Style

- Refero URL: https://styles.refero.design/style/59d76415-95d0-43fe-a698-79147cef9f66
- Site URL: https://loveseen.com
- ID: 59d76415-95d0-43fe-a698-79147cef9f66
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:56:52.959Z
- Ranks: newest: 22, popular: 644, trending: 405

> Minimalist Editorial Canvas

## Description

Loveseen's visual style evokes a minimalist fashion-editorial aesthetic. It presents content on a clean, light canvas, leveraging subtle neutral tones for background variation and borders. Typography is sophisticated and generous with letter spacing, creating an airy feel. Components are understated, featuring hairline borders and an absence of strong shadows, emphasizing content over chrome. The overall impression is one of effortless elegance and product-focused presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #00091b | brand | Primary text, interactive elements (links, buttons) text and borders, outline for ghost buttons. Its near-black depth offers strong contrast and a premium feel |
| Alabaster | #f2eded | neutral | Primary page and hero background |
| Porcelain | #faf6f5 | neutral | Neutral surface background for cards and image containers |
| Blush Sand | #f2e2e0 | neutral | Secondary background color for subtle section breaks and footer area |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BeausiteWeb | system-ui | 400, 500 | 10px, 12px, 13px, 14px, 16px, 18px | 0.92, 1.00, 1.20, 1.43, 1.54, 1.63, 1.67, 2.06, 2.20, 2.31, 2.50 | Primary typeface for all text content including headings, body, navigation, and interactive elements. Its wide range of letter-spacing values enables fine typographic control, emphasizing an airy, premium feel. |
| Arial | Arial, sans-serif | 400 | 13px | 1.20 | Fallback font for small functional text, buttons, and icons where high legibility is paramount. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.63 |  |
| body-sm | 12 | 1.63 |  |
| body | 13 | 1.63 |  |
| body-lg | 14 | 1.63 |  |
| heading-sm | 16 | 1.63 |  |
| heading | 18 | 1.63 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "15px",
  "sectionGap": "70px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Primary interactive element for calls to action.

Transparent background, Midnight Ink (#00091b) text, 1px Midnight Ink (#00091b) border on all sides. No border radius. Padding: 12px vertical, 12px horizontal for smaller instances; 30px vertical, 30px horizontal for larger, more prominent actions.

### Navigation Link

**Role:** Top-level navigation and secondary links.

Midnight Ink (#00091b) text, BeausiteWeb font at various sizes, usually 12-14px. No explicit background or border. Generous letter-spacing. Inherits page background.

### Input Field

**Role:** Text input areas.

Transparent background, Midnight Ink (#00091b) text. Features a 1px Midnight Ink (#00091b) border on all sides. No border radius. Left padding: 21px for content. Text color can be #00091b.

### Follow CTA Block

**Role:** Social media call to action.

Features a light border in Midnight Ink (#00091b) with generous internal padding. Text is Midnight Ink (#00091b), likely with increased letter spacing. Appears on Blush Sand (#f2e2e0) background.

### Product Image Card

**Role:** Displaying product images or user-generated content.

No explicit border or shadow, relies on surrounding negative space. Background is Porcelain (#faf6f5). Appears as a simple square block containing imagery, tightly cropped without additional padding.

## Do's

- Use Alabaster (#f2eded) as the default background for all primary page content sections.
- Apply Midnight Ink (#00091b) for all primary body text, headlines, and interactive elements to maintain high contrast and sophistication.
- Ensure all buttons and input fields feature sharp, 0px border radii.
- Implement consistent 1px borders in Midnight Ink (#00091b) for ghost buttons and input fields to define interactive areas subtly.
- Utilize the BeausiteWeb font family across all typographic elements, leveraging its varied letter-spacing for an airy, elegant presentation.
- Introduce Blush Sand (#f2e2e0) as a background color to delineate distinct content sections or footers with a soft visual break.
- Maintain a spacious density; prioritize ample whitespace, with element gaps around 15px and vertical section gaps at 70px.

## Don'ts

- Avoid applying any border-radius greater than 0px to interactive components like buttons or input fields.
- Do not use strong shadows (elevation) on any UI elements; rely on subtle background color shifts or hairline borders for visual separation.
- Refrain from using highly saturated or bright colors beyond the core brand palette; color should be spare and functional.
- Do not use generic system fonts for prominent display text or navigation; BeausiteWeb is critical to the brand's aesthetic.
- Avoid decorative gradients; stick to solid colors for backgrounds and component fills.
- Do not clutter layouts; maintain a disciplined spaciousness and minimal component density.
- Do not use distinct filled buttons for primary actions; prefer the ghost button style with Midnight Ink borders and text.

## Layout

The page primarily utilizes a full-bleed layout for hero sections, transitioning to a contained, centered model for body content. The hero typically features large, dynamic imagery often split or overlaid with minimal text and ghost buttons. Sections are defined by varying background colors (Alabaster, Blush Sand), creating a subtle visual rhythm without hard dividers. Content is arranged in flexible patterns, including centered stacks for calls to action and multi-column grids for featuring images or testimonials. Navigation is a persistent, minimal top bar with left-aligned brand logo and right-aligned links.

## Imagery

This site features high-key, product-focused photography and lifestyle imagery, often tightly cropped to focus on the face or eyes. Images are full-bleed or presented as isolated, square, unmasked elements on clean backgrounds. The photography is vibrant and high-contrast, showcasing product usage directly rather than conceptual scenes. Icons are minimal, utilizing outlined styles with light stroke weights and predominantly Midnight Ink (#00091b) color. Imagery serves both decorative atmosphere in hero sections and explanatory/social proof roles within content blocks.

## Similar Brands

| Business | Why |
| --- | --- |
| Glossier | Similar focus on minimalist design, clean typography, and product-forward photography on light backgrounds. |
| Away Travel | Employs an elegant, spacious layout with a premium feel, using limited color palettes and subtle surface changes. |
| Everlane | Characterized by its stark, editorial aesthetic, strong typography, and emphasis on product visuals over heavy UI decoration. |
| Aesop | Uses a restrained color palette, clean typography, and a strong emphasis on content, often with a spacious, almost architectural layout. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #00091b
background: #f2eded
border: #00091b
accent: no distinct accent color
primary action: #00091b (outlined action border)

Example Component Prompts:
1. Create a Hero Section with a full-bleed image. Overlay 'LoveSeen' in BeausiteWeb, size 18px, weight 500, letter-spacing 0.37px, color #00091b. Below it, a Ghost Button: 'OH HI' in BeausiteWeb, size 13px, weight 400, letter-spacing 0.5px, color #00091b, with a 1px #00091b border, 30px vertical and 30px horizontal padding, 0px radius.
2. Design a Testimonial Grid section: Set its background to Porcelain (#faf6f5). Each grid item should be a Product Image Card: a square image contained within. No explicit padding or border on the cards themselves, letting the Porcelain background provide visual separation.
3. Create an Outlined Primary Action: Transparent background, #00091b border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521385772-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521385772-thumb.jpg |
