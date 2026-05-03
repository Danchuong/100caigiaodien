# Revolut — Refero Style

- Refero URL: https://styles.refero.design/style/a3161c3c-26d4-425b-aaa3-4fc3f06b77ee
- Site URL: https://revolut.com
- ID: a3161c3c-26d4-425b-aaa3-4fc3f06b77ee
- Theme: light
- Industry: fintech
- Created: 2026-02-16T09:29:17.000Z
- Ranks: newest: 1180, popular: 24, trending: 64

> financial passport to the world

## Description

The design feels like viewing an epic, cinematic world through the clean, clear interface of a premium device. Full-bleed, aspirational photography in hero sections sets a global, adventurous tone, suggesting the life the product enables. This cinematic feel is grounded by an incredibly strict, almost entirely achromatic color palette, where stark white content blocks sit against pure black or photo backgrounds. The display font, Aeonik Pro, is used with tight negative letter-spacing, giving headlines a precise, architectural quality. This tension between expansive human imagery and minimalist, geometric typography defines the system's identity: aspirational but controlled, powerful but simple.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Revolut Black | #191c1f | neutral | Primary text, dark CTA backgrounds, footers, borders. Establishes a deep, serious foundation. |
| Cloud White | #f4f4f4 | neutral | Primary light CTA backgrounds, some page sections. A soft off-white that feels less stark than pure white. |
| Pure White | #ffffff | neutral | Primary page background, text on dark surfaces. |
| Onyx Black | #000000 | neutral | Text on light CTA buttons, some secondary CTA backgrounds. |
| Slate Gray | #8d969 | neutral | Secondary body text, disabled states, helper text. |
| Ash | #505a63 | neutral | Tertiary text, subtle UI elements. |
| Pebble | #c9c9cd | neutral | Borders and dividers. |
| Light-Tint | #ebebf0 | neutral | Subtle button backgrounds and hover states. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Aeonik Pro | Sohne, Neue Haas Grotesk | 400, 500 | 16px, 18px, 24px, 32px, 40px, 53px, 89px | 1.00, 1.17, 1.19, 1.20, 1.33, 1.38 | All major headings (H1-H4) and display text. Its slightly condensed and geometric form creates a modern, architectural feel. The signature use of tight negative letter-spacing at large sizes is critical to its identity. |
| Inter | Inter, San Francisco, Roboto | 400, 600, 700 | 12px, 14px, 16px | 1.20, 1.50, 1.57 | Body copy, button text, labels, captions, and legal text. A neutral, highly-legible workhorse font that recedes to let headings and imagery stand out. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.57 | -0.07 |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.33 | -0.18 |
| heading-sm | 24 | 1.2 | -0.24 |
| heading | 32 | 1.19 |  |
| heading-lg | 40 | 1.2 |  |
| display | 53 | 1.17 | -1.22 |
| display-xl | 89 | 1 | -2.05 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "inputs": "12px",
    "buttons": "9999px",
    "ui-mockups": "22.5px"
  },
  "elementGap": "",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Button Group — Primary Dark, Primary Light, Ghost



### Social Proof — Stats & Awards Block



### Savings Feature Card — Interest Rate CTA



### Primary CTA Button (Light)

**Role:** The main sign-up and affirmative action button.

A pill-shaped button with 9999px radius. Background is Cloud White (#f4f4f4), text is Onyx Black (#000000). Uses Inter 600 weight. Padding is 10px vertically and 24px horizontally.

### Primary CTA Button (Dark)

**Role:** The main action button for use on dark or photographic backgrounds.

A pill-shaped button with 9999px radius. Background is Onyx Black (#000000) or Revolut Black (#191c1f), text is Pure White (#ffffff). Uses Inter 600 weight. Padding is typically 10px vertically and 24px horizontally.

### Ghost Button (On Dark)

**Role:** Secondary action on dark or photographic backgrounds, like 'Explore'.

A pill-shaped button with 9999px radius. Transparent background with a 1px border of Cloud White (#f4f4f4) or a subtle transparent white fill (rgba(244, 244, 244, 0.1)). Text is Cloud White (#f4f4f4). Uses Inter. Padding is 10px vertically and 24px horizontally.

### Navigation Link Button

**Role:** Top-level navigation items in the header.

A pill-shaped button with 9999px radius. Transparent background. Text color is Pure White (#ffffff) on the homepage hero, changing to Revolut Black (#191c1f) on scrolled or light backgrounds. Padding is approximately 8px vertically and 20px horizontally.

### Language Selector Button

**Role:** Small utility button for selecting country/region.

Small pill-shaped button with 9999px radius. Background is Revolut Black (#191c1f), text is Pure White (#ffffff). Contains a country flag icon and text. Padding is minimal, around 0px vertically and 16px horizontally.

### App UI Frame

**Role:** A container that visually represents the mobile app screen.

A rounded rectangle with a 22.5px radius, used to frame screenshots or abstract UI elements. It has a thin, 1px border, often in Pebble (#c9c9cd) or a semi-transparent white on dark backgrounds. It's frequently superimposed over lifestyle photography.

### Award Logo Card

**Role:** Container for displaying third-party award and partner logos.

A simple container for social proof. The screenshot shows a container for 'Customer Satisfaction Gold' as a rounded rectangle with a 20px radius. This element seems to adopt colors from the award badge it contains, though the base system itself is achromatic.

## Do's

- Use Aeonik Pro with significant negative letter-spacing for all display and headline text.
- Restrict the palette almost exclusively to white (#ffffff), off-white (#f4f4f4), black (#000000), and near-black (#191c1f).
- Employ full-bleed, cinematic photography for all hero sections.
- Always use 9999px radius pill-shaped buttons for primary and secondary actions.
- Center-align all headline and sub-headline text blocks within their sections.
- Juxtapose full-bleed photo sections with stark, solid #ffffff background sections.
- Maintain generous vertical whitespace (96px+) between major page sections.

## Don'ts

- Do not introduce any saturated brand or accent colors. The photos provide the only color.
- Do not use box-shadows for elevation. The design is intentionally flat.
- Do not use traditional, sharp-cornered (e.g., 4px-8px radius) buttons.
- Do not use system fonts like Arial or Helvetica for headlines; it will break the brand identity.
- Do not left-align hero content. The centered stack is a core pattern.
- Do not use complex card layouts. Keep content blocks simple and direct.
- Do not make content containers full-width; use the 1200px max-width for readability.

## Layout

The page structure is a series of stacked, centered blocks. Hero sections are full-bleed, using the entire viewport width with large, centered typography. Subsequent content sections are constrained within a 1200px maximum width, also with centered content. This creates a strong vertical rhythm, moving from an immersive photographic experience to a focused, readable content block on a solid white background. Grids are simple and reserved for utilitarian purposes like displaying partner logos. There is a strong preference for generous negative space between sections.

## Imagery

Photography is the primary visual language, serving as an aspirational backdrop rather than direct product showcase. Images are high-quality, cinematic, and depict people in expansive, natural landscapes (mountains, skies). This 'human adventure' theme is consistently used in full-bleed hero sections, often with a subtle dark overlay to ensure text legibility. App UI mockups are frequently superimposed directly onto this photography, creating a direct link between the user's life and the digital tool. The style is never product-in-hand; it's always life-first, with the product as an invisible enabler.

## Similar Brands

| Business | Why |
| --- | --- |
| Wise | Shares the fintech competitor space with a clean, sans-serif typography focus, but uses a bright green accent color where Revolut remains monochrome. |
| Monzo | Also a challenger bank with a minimalist UI, but employs a much brighter, more colorful and playful identity with its hot coral accent. |
| N26 | Another European fintech with a similarly minimalist and premium aesthetic, using a tight black/white/gray palette and geometric typography. |
| Apple | The use of large, high-quality full-bleed imagery, generous whitespace, and precise, tightly-tracked sans-serif typography for a premium feel is highly reminiscent of Apple's marketing pages. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference

*   **Page Background:** `#ffffff` (Pure White)
*   **Text (Primary):** `#191c1f` (Revolut Black)
*   **Text (Secondary):** `#8d969e` (Slate Gray)
*   **Text (On Dark):** `#ffffff` (Pure White)
*   **Primary CTA (Light BG):** `#f4f4f4` background, `#000000` text
*   **Primary CTA (Dark BG):** `#000000` background, `#ffffff` text

### Example Component Prompts

1.  **Hero Section:** "Create a full-bleed hero section with a cinematic photo of a person on a mountain at sunrise as the background. Add a semi-transparent black overlay. Center-align the text. The main headline 'Banking & Beyond' uses Aeonik Pro, 89px, #ffffff, with -2.05px letter-spacing and 1.0 line height. The sub-headline below it says 'This is your bank, redefined...' and uses Inter, 18px, #ffffff, 400 weight. Below that, add a dark primary CTA button."

2.  **Light Primary Button:** "Create a button with the text 'Sign up'. It must be a pill shape with 9999px border-radius. The background is #f4f4f4, and the text color is #000000. Use Inter font at 16px, 600 weight. Padding is 10px top/bottom and 24px left/right."

3.  **Content Section:** "Create a content section with a #ffffff background. The section has a max-width of 1200px and is centered. Add a headline 'Join 70+ million customers' using Aeonik Pro, 53px, #191c1f, with -1.22px letter-spacing. The layout below is a 5-column grid for logos."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929429031-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775929429031-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a3161c3c-26d4-425b-aaa3-4fc3f06b77ee-1777555620982-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a3161c3c-26d4-425b-aaa3-4fc3f06b77ee-1777555620982-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a3161c3c-26d4-425b-aaa3-4fc3f06b77ee-1777555620982-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a3161c3c-26d4-425b-aaa3-4fc3f06b77ee-1777555620982-preview-detail-poster.jpg |
