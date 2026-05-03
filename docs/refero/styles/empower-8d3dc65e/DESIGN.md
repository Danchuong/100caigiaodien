# Empower — Refero Style

- Refero URL: https://styles.refero.design/style/8d3dc65e-4443-4bb3-b1a9-b0fc98381db9
- Site URL: https://empower.me
- ID: 8d3dc65e-4443-4bb3-b1a9-b0fc98381db9
- Theme: mixed
- Industry: fintech
- Created: 2026-04-30T03:44:00.362Z
- Ranks: newest: 82, popular: 622, trending: 439

> midnight command center, bright button

## Description

Tilt communicates a direct, no-nonsense financial brand with a strong visual identity built on bold, condensed typography and a high-contrast dark theme punctuated by a vibrant, optimistic yellow. Components are lightweight and purposeful, relying on shape and color to convey hierarchy rather than heavy shadows. The overall aesthetic is one of confident utility, where key actions are highlighted by bright accents against a dominant dark canvas, switching to a clean light background for content-heavy sections.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Night Sky | #100f0f | neutral | Page background (dark sections), primary dark text, button text on accent backgrounds, footer background |
| Canvas White | #ffffff | neutral | Background for light sections, card surfaces, button text on dark backgrounds |
| Cloud Whisper | #fffdf6 | neutral | Subtle light background texture, secondary light text, ghost button borders in dark sections |
| Deep Space | #171616 | neutral | Primary dark background for hero sections and prominent blocks |
| Charcoal Card | #262525 | neutral | Dark card backgrounds within dark sections |
| Metal Gray | #64635c | neutral | Subtle borders, tertiary text for helper messages and captions |
| Button Yellow | #e4e24e | brand | Primary action buttons, interactive elements, accent highlights — a vivid spark against dark and light themes |
| Muted Yellow | #faf9b6 | accent | Subtle background for UI elements like cards or secondary highlights |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GTAmericaExtended | Inter | 400 | 11px, 13px, 16px, 18px, 20px, 21px, 26px | 1.20, 1.27, 1.33, 1.38, 1.48, 1.50 | Primary body text, links, navigation items, and some smaller headings. Its extended width gives a distinctive, confident character to text. |
| GTAmericaExpanded | Inter | 400, 500 | 11px, 12px, 13px, 16px | 1.50, 1.54, 1.82 | Used for specific button labels and navigation, the expanded width adds emphasis without increasing weight. |
| Gravity | Poppins | 400, 900 | 16px, 24px, 40px, 48px, 96px, 205px | 1.00, 1.50 | Primary display font for hero headlines and impactful statements. Its bold presence and extremely tight letter-spacing create an assertive, almost digital feel. |
| EmpowerSerif | Playfair Display | 400, 600 | 16px, 40px, 96px, 205px | 1.00, 1.50 | Secondary display font for large expressive headings, contrasting Gravity with its serif structure but maintaining a strong, direct presence. |
| GTAmericaExtendedMedium | Inter | 500 | 36px | 1.11 | Used for prominent subheadings, offering a slightly bolder alternative to GTAmericaExtended for increased hierarchy without resorting to heavier display fonts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | 1.1 |
| body | 16 | 1.33 | -0.24 |
| subheading | 26 | 1.2 | -0.78 |
| heading-sm | 36 | 1.11 | -0.252 |
| heading | 40 | 1 | -0.24 |
| heading-lg | 48 | 1.5 | -0.288 |
| display | 96 | 1 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "buttons": "16777216px",
    "modules": "16px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call to action across the site.

Filled button with Button Yellow (#e4e24e) background, Night Sky (#100f0f) text (GTAmericaExpanded, weight 400), and a large border-radius (effectively pill-shaped). Padding is 8px vertical, 16px horizontal.

### Ghost Navigation Button

**Role:** Secondary action or navigation in dark sections.

Transparent background, Cloud Whisper (#fffdf6) text (GTAmericaExtended, weight 400), thin Cloud Whisper (#fffdf6) border, large border-radius (effectively pill-shaped). Padding is 8px vertical, 16px horizontal.

### Ghost Secondary Button

**Role:** Clickable elements requiring less emphasis, often in light sections.

Transparent background, Night Sky (#100f0f) text (GTAmericaExtended, weight 400), thin Night Sky (#100f0f) border, large border-radius (effectively pill-shaped). Padding is 20px all around.

### Dark Photo Card

**Role:** Displaying imagery with associated monetary values against a dark background.

Charcoal Card (#262525) background, 24px border-radius, no shadow. Padding 8px horizontal, 40px bottom relative to content framing imagery at top.

### Light Content Card

**Role:** General content display in light sections.

Cloud Whisper (#fffdf6) background, 16px border-radius, no shadow. Padding 32px top, 24px horizontal, 24px bottom.

### Muted Yellow Content Card

**Role:** Highlighting specific content blocks with a soft accent hue.

Muted Yellow (#faf9b6) background, 24px border-radius, no shadow. Padding 32px all around.

## Do's

- Use Night Sky (#100f0f) as the primary dark background for main page sections.
- Apply Button Yellow (#e4e24e) exclusively for primary interactive elements, ensuring its vibrancy draws attention.
- For headlines, select Gravity (weight 900) or EmpowerSerif (weight 600) with their specific tight letter-spacing for maximum impact.
- Maintain a large, effectively pill-shaped border-radius for all primary buttons, visually communicating interaction.
- Structure information using a strong contrast between Night Sky (#100f0f) and Canvas White (#ffffff) sections for clear visual separation.
- Employ GTAmericaExtended for body text and navigation, capitalizing on its extended character for a distinctive textual rhythm.
- Use a minimum of 24px border-radius for cards and modules, lending a friendly but structured appearance.

## Don'ts

- Do not introduce new saturated accent colors; limit accents to shades of yellow.
- Avoid applying heavy drop shadows; cards and elements should primarily rely on background color and border-radius for definition.
- Do not use generic system fonts for any headline or prominent text; stick to the custom font stack for brand consistency.
- Never use Button Yellow (#e4e24e) for text; it is reserved for backgrounds of interactive elements.
- Avoid breaking button styles by using square corners for primary calls to action; always use the large border-radius.
- Do not vary paragraph or body text letter-spacing from the tokenized GTAmericaExtended values, especially for smaller sizes.
- Refrain from using thin light lines on dark backgrounds unless specified as Ghost Button borders or subtle dividers.

## Layout

The page exhibits a mixed layout, starting with a full-bleed dark hero section featuring a centered headline. Following sections often alternate between dark and light backgrounds, creating a distinct vertical rhythm. Content is typically arranged in centered stacks or two-column text-left/image-right patterns. A prominent feature is the use of image grids with rounded-corner photo cards. The navigation is a fixed top bar on dark background for clarity, with a maximum content width that appears to be contained within around 1200px after the initial full-bleed hero.

## Imagery

The site heavily features photography of diverse individuals, often presented within circular or rounded containers. Imagery is typically lifestyle-oriented, focusing on people in everyday situations, implying relatability and broad accessibility. Product screenshots occasionally appear, mainly for mobile UI, showcasing a clean and focused interface with brand colors. Icons are outlined, simple, and monochrome, primarily acting as functional indicators rather than decorative elements. Image density is moderate, carefully balanced with bold typography, and serves to humanize the financial services offered.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | High-contrast dark UIs with bold, angular sans-serif typography and minimal use of accent colors for functional elements. |
| Ramp | Financial tech that employs a mix of contrasting light and dark sections and strong, condensed display fonts. |
| Mercury Bank | Modern fintech aesthetic with clean layouts, focused accent colors, and a strong emphasis on typography for brand voice. |
| Wise (formerly TransferWise) | Direct communication style, functional use of a single strong accent color, and a balance of informational density with clear visual hierarchy. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #100f0f
background: #100f0f (dark sections), #ffffff (light sections)
border: #64635c
accent: #e4e24e
primary action: #e4e24e (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #e4e24e background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a feature card for a light section: Cloud Whisper (#fffdf6) background, 16px radius, with a GTAmericaExtended weight 400 headline at 26px and regular GTAmericaExtended body text, both in Night Sky (#100f0f). Add 32px padding all around.
3. Build a navigation bar item: Night Sky (#100f0f) background, GTAmericaExtended weight 400 text at 16px in Cloud Whisper (#fffdf6), and on hover, use a ghost button style with a Cloud Whisper (#fffdf6) border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520618064-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520618064-thumb.jpg |
