# Liquid Death — Refero Style

- Refero URL: https://styles.refero.design/style/b6f2b036-e48e-452f-b003-941c491015c0
- Site URL: https://liquiddeath.com
- ID: b6f2b036-e48e-452f-b003-941c491015c0
- Theme: mixed
- Industry: ecommerce
- Created: 2026-03-15T13:49:39.000Z
- Ranks: newest: 1041, popular: 305, trending: 764

> Heavy Metal Vending Machine

## Description

This design system feels like a heavy metal concert flyer brought to life as a direct-to-consumer brand. The aesthetic is built on brutalist principles: a stark palette of pure black and white, zero rounded corners, and aggressive, uppercase typography. This creates a hard, confrontational edge, deliberately rejecting the soft, approachable look of typical beverage companies. Splashes of antique gold in logos and links are the only moments of warmth, acting like a glint of metal on a matte black surface. The layout uses full-bleed, high-contrast sections, creating a jarring, powerful rhythm that mirrors the brand's 'Murder Your Thirst' tagline.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Death Black | #000000 | neutral | Primary text, core UI backgrounds, filled buttons. Establishes the dominant, aggressive tone. |
| Bone White | #ffffff | neutral | Text on dark backgrounds, primary page backgrounds. |
| Off-Black | #151515 | neutral | Body copy on light backgrounds, secondary UI elements. |
| Ash Gray | #e3e3e3 | neutral | Product grid background, subtle dividers. |
| Gravel Gray | #727272 | neutral | Secondary text, disabled states, placeholder text. |
| Light Ash | #f5f5f5 | neutral | Alternative light background color for section differentiation. |
| Charcoal | #232323 | neutral | Hover states on dark elements. |
| Input Border | #999999 | neutral | Default border color for text input fields. |
| Polished Gold | #d2ac5a | accent | Accents, special links, logotype details — a premium, metallic highlight against the stark monochrome. |
| Antique Gold | #8a6d35 | accent | Hover state for gold accents, secondary logotype details. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Acumin Pro | 'Inter', 'Roboto', sans-serif | 400, 500, 700 | 12px, 14px, 16px, 18px, 20px, 24px, 32px, 36px, 40px, 56px, 60px | 1.00, 1.05, 1.13, 1.20, 1.29, 1.50, 1.67, 2.00 | The single, dominant typeface used for everything from massive uppercase headlines to body copy. Its clean, geometric form provides a brutalist, no-nonsense foundation. Extensive use of uppercase at 700 weight for headings is the brand's signature voice. |
| acumin-pro-condensed | 'Roboto Condensed', sans-serif | 400, 700 | 10px, 16px, 18px, 20px, 45px | 1.00, 1.05, 1.20, 1.30 | Used sparingly for subtitles and calorie counts where horizontal space is limited. Maintains the core Acumin feel in a more compact format. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.67 |  |
| subheading | 24 | 1.2 |  |
| heading-sm | 36 | 1.13 |  |
| heading | 45 | 1.05 |  |
| display | 60 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "0px",
    "cards": "0px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Product Cards — Beverage Grid



### Merch Product Card Row



### Full-Width Banner CTAs + Email Capture



### Primary Action Button

**Role:** Key CTAs like 'Shop Now' or 'Add to Cart'.

A solid rectangle with background: `Death Black` (#000000), text: `Bone White` (#ffffff), padding: 8px 16px, and border-radius: 0px. Text is uppercase `Acumin Pro`.

### Secondary Action Button

**Role:** Less prominent actions like 'Join the Contest'.

An outlined rectangle with background: transparent, text & 1px border: `Death Black` (#000000), padding: 13px, and border-radius: 0px. Text is uppercase `Acumin Pro`.

### Full-Width Banner CTA

**Role:** Major section-level calls to action, e.g., 'Join the Club'.

A full-width block link with background: `Death Black` (#000000), text: `Bone White` (#ffffff), and a right-aligned chevron. It is always rectangular with a 0px radius.

### Text Input Field

**Role:** For email capture and forms.

A sharp-cornered field with background: `Bone White` (#ffffff), text: `Death Black` (#000000), and a 1px border in `Input Border` (#999999). Padding is typically 8px 12px with 0px radius.

### Navigation Link

**Role:** Main site navigation items.

Uppercase text in `Acumin Pro` 500, color `Off-Black` (#151515). No underline or background decoration on hover.

### Modal Overlay

**Role:** Popup for email signup or promotions.

A semi-transparent `Gravel Gray` (#727272) layer covers the page, with a centered rectangular container in `Ash Gray` (#e3e3e3) holding the content. All corners are sharp (0px radius).

## Do's

- Use 0px border-radius for all buttons, inputs, cards, and containers.
- Set all major headlines in uppercase `Acumin Pro`.
- Rely on stark `Death Black` and `Bone White` for primary backgrounds and text.
- Use full-bleed, high-contrast black and white sections to structure the page.
- Reserve `Polished Gold` and `Antique Gold` for logotypes and hyper-specific accents.
- Maintain high-contrast text accessibility (AAA) for all body copy.
- Use sharp, rectangular product imagery on solid `Ash Gray` backgrounds.

## Don'ts

- Never use rounded corners on any element.
- Do not use drop shadows or gradients for elevation.
- Avoid using sentence case for primary headlines.
- Don't use the gold colors for standard UI components like buttons or inputs.
- Do not introduce any soft or playful colors into the palette.
- Avoid subtle gray-on-gray text combinations.
- Don't use lifestyle photography; focus on the product or provocative concepts.

## Layout

The layout is built on a foundation of alternating, full-bleed content bands. The page structure often starts with a complex hero and transitions into a series of stark black, white, or light gray sections with a strong vertical rhythm. Content within sections is typically centered and max-width, creating a pillar of text and visuals down the screen. Grids are used for product listings, following a simple, rigid 3 or 4-column structure with no frills. The overall impression is one of powerful, rhythmic, and confrontational organization.

## Imagery

The visual language is provocative and product-focused, mirroring a heavy-metal aesthetic. Photography is high-contrast, often featuring stark product shots on plain backgrounds, or humorous, slightly absurd concepts (like drinking from a faucet). Imagery is used in full-bleed sections or as contained, sharp-edged blocks. There are no lifestyle photos; the can is the hero. Graphic elements include detailed, skull-based logotypes reminiscent of band art, rendered in black, white, and gold.

## Similar Brands

| Business | Why |
| --- | --- |
| MSCHF | Similar counter-culture, internet-native brand voice with a stark, often brutalist digital presence. |
| Thrasher Magazine | Shares a gritty, unapologetic aesthetic rooted in a subculture, with bold, often gothic typography. |
| Balenciaga (under Demna) | Employs a similar brutalist web design with stark typography, minimal color, and a focus on product in a harsh context. |
| Kith | High-end streetwear e-commerce with a similar product-first, grid-based layout and monochrome palette, though Kith is less aggressive. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Page Background**: `#ffffff` (Bone White) / `#e3e3e3` (Ash Gray)
- **Dark Section Background**: `#000000` (Death Black)
- **Text**: `#151515` (Off-Black) on light, `#ffffff` (Bone White) on dark
- **CTA Button**: `#000000` background, `#ffffff` text
- **Accent**: `#d2ac5a` (Polished Gold)

### Example Component Prompts
1.  **"Create a primary CTA button with the text 'MURDER NOW'. It must have a `Death Black` (#000000) background, `Bone White` (#ffffff) uppercase text, 0px border-radius, and padding of 8px 16px. Use the `Acumin Pro` font at 700 weight."**
2.  **"Generate a product grid section on an `Ash Gray` (#e3e3e3) background. Each card should have 0px radius, no border, and no shadow. The product title should be uppercase `Acumin Pro` weight 700 in `Death Black` (#000000)."**
3.  **"Design a full-width promotional banner. The background is `Death Black` (#000000). The headline 'JOIN THE CLUB' should be in `Bone White` (#ffffff), uppercase `Acumin Pro` font, centered, with a small white chevron to the right."**

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929859306-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929859306-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b6f2b036-e48e-452f-b003-941c491015c0-1777567301229-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b6f2b036-e48e-452f-b003-941c491015c0-1777567301229-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b6f2b036-e48e-452f-b003-941c491015c0-1777567301229-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b6f2b036-e48e-452f-b003-941c491015c0-1777567301229-preview-detail-poster.jpg |
