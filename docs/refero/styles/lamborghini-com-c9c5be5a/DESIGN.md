# Lamborghini.com — Refero Style

- Refero URL: https://styles.refero.design/style/c9c5be5a-aaa1-4338-9681-8378d2e24fbd
- Site URL: https://lamborghini.com
- ID: c9c5be5a-aaa1-4338-9681-8378d2e24fbd
- Theme: mixed
- Industry: other
- Created: 2026-01-31T17:19:57.000Z
- Ranks: newest: 1248, popular: 177, trending: 148

> Precision-engineered black steel with yellow accents. Every edge is sharp, every surface polished, reflecting light with purpose.

## Description

This design system evokes the controlled power of a luxury performance vehicle, balancing industrial precision with subtle opulence. A stark black and white foundation, accented by a deep, authoritative yellow, creates immediate visual impact. The absence of rounded corners and a consistent, generous letter-spacing in the custom typeface reinforces a feeling of engineered clarity and unyielding directness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon Black | #000000 | neutral | Primary background for dark sections, text on light surfaces, and interactive element borders. |
| Ghost White | #ffffff | neutral | Primary background for light sections, inverse text, and button fills. |
| Concrete Gray | #f5f5f5 | neutral | Secondary background for light sections, subtle dividers. |
| Graphite | #202020 | neutral | Default text color on light backgrounds, primary icon color. |
| Dark Metal | #181818 | neutral | Background for headers and footers in dark mode, creating a richer sense of depth than pure black. |
| Engine Yellow | #917300 | brand | Primary interactive accent color for buttons and highlights — a muted gold that signifies luxury and performance. |
| Speed Yellow | #ffc000 | brand | Vivid interactive accent color, used sparingly for immediate calls to action, drawing the eye with intense saturation. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| LamboType | Montserrat | 400 | 10px, 12px, 16px, 18px, 27px, 32px, 40px, 54px, 80px, 120px | 0.92, 1.00, 1.13, 1.15, 1.19, 1.37, 1.38, 1.50, 1.56, 1.63, 1.83, 2.00 | Primary typeface for all text elements — headlines, body, links, buttons, and navigation. Its custom nature and consistent letter-spacing across all sizes reinforce the brand's engineered feel. |
| Open Sans | Open Sans | 400 | 16px | 1.50 | Fallback or secondary text, used sparingly for small utility text or where a more conventional typeface is required. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.56 | 0.23 |
| body | 16 | 1.38 | 0.368 |
| subheading | 18 | 1.15 | 0.414 |
| heading | 27 | 1.13 | 0.621 |
| heading-lg | 32 | 1.19 | 0.736 |
| display | 80 | 1 | 1.84 |
| display-xxl | 120 | 0.92 | 2.76 |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "24px",
  "sectionGap": "80px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Event Announcement Banner



### News Article Card



### Primary Action Button - Engine Yellow

**Role:** Call to action

Solid `Engine Yellow (#917300)` background, `Ghost White (#ffffff)` text. Padding: 24px horizontal, 24px vertical. No border-radius, creating a sharp, rectangular form. Uses LamboType 400.

### Secondary Action Button - Speed Yellow

**Role:** Call to action (more urgent)

Solid `Speed Yellow (#ffc000)` background, `Carbon Black (#000000)` text. Padding: 24px horizontal, 24px vertical. No border-radius, for maximum visual impact. Uses LamboType 400.

### Outline Neutral Button

**Role:** Navigation, secondary actions

Transparent background, `Ghost White (#ffffff)` text, 1px `Ghost White (#ffffff)` border. Padding: 8px vertical, 8px horizontal. No border-radius. Uses LamboType 400.

### Outline Black Button

**Role:** Navigation, secondary actions for light background

Transparent background, `Carbon Black (#000000)` text, 1px `Carbon Black (#000000)` border. Padding: 24px vertical, 24px horizontal. No border-radius. Uses LamboType 400.

### Transparent Card

**Role:** Content grouping

Fully transparent background (`rgba(0, 0, 0, 0)`), no border, no box-shadow, no border-radius. Content sits directly on the page background, delineated only by typography and spacing.

### Navigation Badge/Filter

**Role:** Informational

Fully transparent background (`rgba(0, 0, 0, 0)`), `Graphite (#202020)` text. No padding or border, appearing as raw text. No border-radius.

## Do's

- Use `LamboType` for all text elements to maintain a consistent brand voice.
- Apply `0.0230em` letter-spacing consistently to `LamboType` for titles and body alike.
- Employ `Engine Yellow (#917300)` for primary interactive elements against dark backgrounds.
- Utilize `Speed Yellow (#ffc000)` sparingly for high-emphasis calls to action on light backgrounds to maximize impact.
- Maintain `0px` border-radius across all components for a sharp, angular aesthetic.
- Structure vertical spacing with multiples of `24px`: `24px`, `48px`, `80px` for consistent content flow.
- Use `Carbon Black (#000000)` and `Ghost White (#ffffff)` as the foundational palette, with `Graphite (#202020)` for general text on light backgrounds.

## Don'ts

- Do not introduce rounded corners; curves are reserved for product imagery, not UI elements.
- Avoid shadows or complex elevation schemes; depth is achieved primarily through color contrast and layered full-bleed sections.
- Do not use `Open Sans` for primary-level text; reserve it for minor, descriptive content only.
- Refrain from using desaturated color accents outside the designated `Engine Yellow` and `Speed Yellow`.
- Do not vary `LamboType` weights; 400 is the only specified weight, contributing to the consistent, precise feel.

## Layout

The layout is a dynamic mix of full-bleed sections and contained content, emphasizing visual impact. The hero section often features full-viewport imagery with centered or left-aligned headlines, creating an immersive experience. Subsequent sections alternate between dark and light backgrounds, often with generous `80px` vertical spacing. Content within sections frequently utilizes `24px` and `48px` spacing units. The overall feel is a centered, high-contrast presentation for maximum visual punch, driven by large imagery and bold typography, rather than a rigid grid system.

## Imagery

This site features highly curated, dramatic product photography, primarily of cars in dynamic, often low-light or studio-lit environments. Imagery is full-bleed, sharp-edged, and serves as primary content, often with large text overlays. There are also detail shots of technical components and branded materials. Visuals are typically desaturated or have a specific color grade to emphasize the form and material of the vehicles and products, occasionally contrasted with vibrant accents like headlights. The focus is always on the product, presented with a sense of awe and aspiration.

## Similar Brands

| Business | Why |
| --- | --- |
| Porsche | Similar high-contrast dark/white sections, premium feel, and emphasis on product photography often with sharp typefaces. |
| Ferrari | Luxury automotive brand with a high-impact visual style, strong brand color accents, and a focus on product presentation. |
| Bugatti | Exclusive automotive brand often featuring a dark, sophisticated palette and bespoke typography to convey luxury and performance. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: `Graphite (#202020)`
- Background (Light): `Ghost White (#ffffff)`
- Background (Dark): `Carbon Black (#000000)`
- CTA Primary: `Engine Yellow (#917300)`
- CTA Secondary: `Speed Yellow (#ffc000)`

### 3-5 Example Component Prompts
1. Create a dark hero section: `Carbon Black (#000000)` background. Headline "DRIVEN BY DREAMS" using `LamboType 400` at 80px, `Ghost White (#ffffff)` color, `1.84px` letter-spacing. Add an 'Outline Neutral Button' below with text 'Descubrir más'.
2. Create a light information section: `Ghost White (#ffffff)` background. Subheading "MODELOS" using `LamboType 400` at 32px, `Graphite (#202020)` color, `0.736px` letter-spacing. Include a link 'Descubrir todos los modelos' using `LamboType 400` at 16px, `Graphite (#202020)`.
3. Create a primary call-to-action button: text 'Tickets', `Engine Yellow (#917300)` background, `Ghost White (#ffffff)` text color, `0px` border-radius, `24px` vertical and horizontal padding, using `LamboType 400` at 16px, `0.368px` letter-spacing.
4. Design a header: `Dark Metal (#181818)` background. Left-aligned 'Menú' button (Outline Neutral), centered `LamboType` logo (icon), right-aligned search and account icons using `Ghost White (#ffffff)` color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924870289-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924870289-thumb.jpg |
