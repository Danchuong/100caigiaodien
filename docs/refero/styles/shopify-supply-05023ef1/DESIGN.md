# Shopify Supply — Refero Style

- Refero URL: https://styles.refero.design/style/05023ef1-b0e6-4e84-8987-edd5dc11a848
- Site URL: https://shopify.supply
- ID: 05023ef1-b0e6-4e84-8987-edd5dc11a848
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T00:29:04.025Z
- Ranks: newest: 787, popular: 989, trending: 932

> Pixelated streetwear on raw concrete

## Description

Shopify Supply is a digital storefront with a distinct glitch-art, anti-establishment attitude. It combines bold, highly-tracked typography and a dark, almost gritty background with unexpected neon green and yellow accents. The visual system prioritizes sharp contrasts and unconventional styling, using minimal rounded corners and pervasive grid-like textures to evoke a raw, early-internet aesthetic meeting modern streetwear design. Components are largely borderless or subtly outlined, creating a sense of weightlessness on a dense dark canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Black | #000000 | neutral | Page backgrounds, heading text, primary text on light surfaces |
| Ghostly Gray | #e5e7eb | neutral | Decorative borders, inactive elements, subtle text on dark backgrounds |
| Text Gray | #ababab | neutral | Muted body text, placeholder text |
| Input Gray | #999999 | neutral | Input borders and placeholder text |
| Accent Green | #6fc992 | accent | Hyperlink text, small product detail accents, decorative icon fills |
| Vivid Green | #d0f224 | accent | Green text accent for links, tags, and emphasized short phrases. Do not promote it to the primary CTA color |
| Surface Dark Gray | #1e2939 | neutral | Secondary background surfaces and borders on dark themes |
| Header Divider | #3d3f40 | neutral | Header and footer dividers, subtle visual separation |
| Background Grid Light Green | #a4d06b | accent | Dominant color of the gradient used for hero backgrounds and full-bleed sections |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter-Variable | Inter | 400, 450, 500, 700 | 12px, 14px, 16px, 18px, 20px, 22px, 36px | 1.17, 1.18, 1.25, 1.33, 1.40, 1.43, 1.50, 1.56 | The primary font for all content, from body text to most headings. Its variable nature handles diverse typographic needs with a subtle, modern feel. Letter spacing is subtly tight for most uses, with a slight negative tracking for larger sizes. |
| Grtsk-Bold-Tera | Open Sans | 800 | 32px | 1.00 | Used for bold, impactful display text, particularly in headers and key brand statements. Its extreme weight and tight line height create a striking, almost condensed presence. |
| Fraktion | Roboto Mono | 450 | 22px | 1.18 | A monospace-like font for specific textual elements, adding a technical or code-like aesthetic. Its 22px size with 1.18 line height provides clear readability for short phrases. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.12 |
| body-sm | 14 | 1.43 | -0.14 |
| body | 16 | 1.5 | -0.16 |
| subheading-sm | 18 | 1.33 | -0.18 |
| subheading | 20 | 1.25 | -0.2 |
| heading-sm | 22 | 1.18 | -0.22 |
| display-sm | 32 | 1 | 0 |
| heading | 36 | 1.17 | -0.36 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px",
    "buttonSmall": "1.67772e+07px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": "1245px"
}
```

## Components

### Ghost Navigation Link

**Role:** Primary navigation and subtle interactive elements.

Text in Canvas Black (#000000) or Ghostly Gray (#e5e7eb) with no background or padding. Border is 1px solid Ghostly Gray to delineate an active state or subtle interaction.

### Pill Ghost Button

**Role:** Secondary action button for interactive elements.

Rounded shape with transparent background and white text. Text is #FFFFFF and padding is 16px around all sides.

### Pill Faded Button

**Role:** Tertiary action with reduced visual emphasis.

A very subtle, almost transparent pill-shaped button with gray text and a matching gray border. Colors are #ababab for text and border, with a near-transparent background.

### Shop Now Button

**Role:** Prominent call-to-action button within hero sections or product displays.

A stark, unrounded button with black text on a white background. It has generous horizontal padding and no border radius. Background is #FFFFFF, text #000000, with 16px vertical and 48px horizontal padding.

### Product Card

**Role:** Container for showcasing products, designed to be visually clean.

A frameless, shadowless card with a transparent background. Padding is intentionally zero, allowing content to dictate spacing. Text may inherit surrounding context colors.

### Text Input Dark

**Role:** User input fields on dark backgrounds.

A text input with a black background, white text for input, and a subtle gray border (#999999). Vertical padding is 20px, left padding 24px, and there's no border radius.

## Do's

- Prioritize Canvas Black (#000000) for all main page and section backgrounds.
- Use Accent Green (#6fc992) for interactive links and subtle product description accents.
- Employ the linear gradient `linear-gradient(to top, rgb(164, 208, 107), rgb(206, 220, 46), rgb(201, 243, 0))` for hero sections and full-bleed brand statements.
- Apply Inter-Variable as the primary typeface for all textual content, adjusting weights and letter-spacing as per the type scale.
- Construct call-to-action buttons with a stark #FFFFFF background and #000000 text, using 0px border-radius.
- Maintain a grid-like visual texture with thin #e5e7eb or #3d3f40 dividers for content separation, especially on dark surfaces.
- Utilize 0px border-radius across most components for a sharp, angular aesthetic.

## Don'ts

- Avoid generic drop shadows; use them only as explicitly specified for interactive elements like the button shadow `rgba(0, 0, 0, 0.1) 0px 0px 8px 0px`.
- Do not introduce soft bezier curves or organic shapes; maintain a geometric and angular sensibility.
- Refrain from using pastel or desaturated color palettes; lean into high contrast and vivid color pops.
- Do not add extra padding or spacing around product cards; they should appear flush with surrounding content.
- Avoid applying excessive rounded corners; the default is 0px for most elements.
- Do not deviate from the specified Inter-Variable letter-spacing values, particularly the negative tracking at larger sizes.
- Do not use generic system fonts; always map to one of the specified brand typefaces (Inter-Variable, Grtsk-Bold-Tera, Fraktion).

## Layout

The page primarily uses a max-width contained layout of 1245px, centered on a Canvas Black background. The hero section is often a full-bleed gradient with a large centered headline and prominent call-to-action. Content sections typically alternate between a continuous dark background and sections that use the Surface Dark Gray with light text. There's a strong emphasis on grid-like compositions, with product cards arranged in multiple columns. Vertical spacing is consistent with the `sectionGap` (64px) providing clear breaks. Navigation is a sticky top bar with minimal links and iconic search/account/cart actions.

## Imagery

The visual language is a blend of product photography and pixel art. Photography features tightly cropped product shots often against white or neutral backgrounds, focusing on the item itself rather than lifestyle context. Some images incorporate a raw, almost deconstructed feel. Illustrations are exclusively pixel art, often brand characters or small decorative elements, lending a retro, glitch-art aesthetic. Icons are simple, outlined, and monochromatic, matching the overall starkness. Imagery serves both decorative atmosphere (pixel art) and direct product showcasing (photography), existing in a relatively text-dominant layout but with key hero sections featuring large-scale graphics or gradient backgrounds.

## Elevation

| Element | Style |
| --- | --- |
| Pill Ghost Button | rgba(0, 0, 0, 0.1) 0px 0px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Monochromatic interface with a single vibrant accent color used for interaction and branding. |
| Are.na | Emphasis on stark, borderless cards and a grid-based, minimalist layout on a dark background. |
| Framer | Modern design aesthetic with strong typography, tight negative letter-spacing, and a dark theme. |
| Glossier | Product-focused photography with a clean, unornamented presentation. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- text: #e5e7eb
- background: #000000
- border: #e5e7eb
- accent: #6fc992
- primary action: no distinct CTA color

**3-5 Example Component Prompts:**
1. Create a primary navigation link: text 'Shop' using Inter-Variable weight 450, 16px, #e5e7eb, with a 1px #e5e7eb bottom border on active states. Padding for the link should be 0px.
2. Design a product card for a collection: no background, 0px padding, no border-radius. Product title (e.g., 'The MVP Crew') uses Inter-Variable weight 500, 18px, #e5e7eb. Price (e.g., 'USD $59.00') uses Inter-Variable weight 400, 16px, #e5e7eb. Include a 'Shop now' link using Accent Green (#6fc992) Inter-Variable weight 400, 14px.
3. Build a large hero section: background using the 'Background Grid Light Green' gradient. Centered headline 'COMMIT TO THE DRIP' using Grtsk-Bold-Tera weight 800, 32px, Canvas Black (#000000). Subtext 'Get a little something for the liquid lovers, bug bashers, and full-stack shippers.' uses Inter-Variable weight 400, 16px, #e5e7eb. Below, a 'Shop now' button with #000000 text on a #FFFFFF background, 0px border-radius, and 16px vertical, 48px horizontal padding.
4. Layout a text input on a dark surface: background #000000, text #ffffff, placeholder text in Input Gray (#999999). Border 1px solid #999999, 0px border-radius. Padding 20px top/bottom, 24px left.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508913267-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508913267-thumb.jpg |
