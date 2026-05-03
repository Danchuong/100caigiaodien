# Fidèle Editions — Refero Style

- Refero URL: https://styles.refero.design/style/957da5c3-7063-4992-9d25-e255752dc9b3
- Site URL: https://fidele-editions.com
- ID: 957da5c3-7063-4992-9d25-e255752dc9b3
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:59:02.814Z
- Ranks: newest: 12, popular: 781, trending: 611

> Risographic print workshop: layers of paper and ink, tactile and vibrant.

## Description

Fidèle Editions presents an analog craft workshop aesthetic: a warm off-white canvas, sturdy typography, and a single vibrant blue brand accent. Product surfaces are subtle, often borderless, letting the rich product imagery dominate. Typography combines playful, condensed headlines with robust body text, creating a tactile, hand-printed feel across the interface.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Faded Paper | #f8f7ef | neutral | Page background, input fields, subtle card surfaces — a warm, creamy off-white that creates a paper-like canvas |
| Printmaker Blue | #1664eb | brand | Primary brand accent, link text, active states, decorative borders around text, and outlined action highlights — a vivid, almost electric blue that cuts through the warm neutrals |
| Shop Grid Blue | #4f89ec | brand | Link text within product grids, secondary icon tinting — a slightly softer variant of the brand blue, used for less prominent interactive elements |
| Ink Black | #121212 | neutral | High-contrast neutral action fill for primary buttons on light surfaces. |
| Dusty Gray | #e2e2df | neutral | Divider lines, subtle backgrounds for content grouping — a light, cool gray that provides minimal visual separation |
| Pure White | #ffffff | neutral | Text on dark backgrounds, selected border accents, icon colors — used sparingly for contrast against Ink Black or Printmaker Blue |
| Link Blue | #006ce5 | accent | Specific link colors, typically within text blocks, providing a slightly darker, more traditional blue for internal navigation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BaselGrotesk Book | Inter | 400 | 14px, 16px, 20px, 22px, 24px, 26px, 28px, 32px, 37px, 38px, 41px, 62px | 0.92, 0.96, 1.00, 1.20, 1.30, 1.50, 1.80 | General text, navigation, product titles — this semi-condensed grotesque forms the backbone of the site’s voice through its wide range of sizes and line heights. The negative letter-spacing for larger sizes gives it a compact, intentional feel. |
| BaselGrotesk Regular | Inter | 400 | 14px, 17px, 19px, 32px, 62px | 0.92, 1.00, 1.50 | Secondary headings, smaller labels, and image captions — offering a slightly more open form compared to 'Book' for readability at varied sizes. |
| Arial | Helvetica Neue | 400 | 13px | 1.20 | Utility text, small buttons, and system-level messages — a highly legible sans-serif for functional elements where clarity is paramount. |
| BaselGrotesk Bold | Inter | 400, 700 | 22px, 32px | 0.92, 1.00 | High-impact statements and critical body text emphasis — used sparingly to draw attention without shouting. Note that its 'bold' variant defaults to 400 weight visually. |
| OTMagisterUnlicensedTrial Regular | Playfair Display | 400 | 62px | 0.92 | Unique display font for hero headlines and key promotional elements — its distinctive character adds a sophisticated, almost artistic touch to focal points. |
| GTStandard-M | Space Mono | 400 | 14px | 1.50 | Specialized small-text contexts, possibly for metadata or fine print — a robust monospace-esque font for structured data presentation. |
| Assistant | Inter | 400 | 26px | 1.50 | Input field text with slightly elevated letter spacing to maintain readability in interactive contexts. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.2 |  |
| body | 16 | 1.5 | -0.16 |
| subheading | 22 | 0.92 |  |
| heading | 32 | 1 | -0.64 |
| display | 62 | 0.92 | -0.99 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "42px",
  "cardPadding": "19px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Brand Link

**Role:** Hypertext link or navigation item with an underline.

Text is 'Printmaker Blue' (#1664eb), font 'BaselGrotesk Book', with a 'Printmaker Blue' (#1664eb) underline on hover/active. No border radius.

### Ghost Command Button

**Role:** A utility button designed for low hierarchy actions or page navigation (e.g. 'Skip to content').

Background is transparent, text is 'Ink Black' (#121212), font 'Arial' 13px weight 400. Padding varies significantly but can be simulated using 48px horizontal for large and 0px for small. No border radius.

### Filled Footer Button

**Role:** A solid background button for secondary actions usually against dark backgrounds (e.g. newsletter subscribe).

Background is 'Ink Black' (#121212), text is 'Pure White' (#ffffff), font 'Arial' 13px weight 400. Padding: 0px vertical, 48px horizontal. No border radius.

### Product Input Field

**Role:** Input fields for forms (e.g. search, email).

Background is 'Faded Paper' (#f8f7ef), text color is 'Printmaker Blue' (#1664eb) or 'Ink Black' (#121212) for input value. Border is 'Printmaker Blue' (#1664eb) at the bottom. Padding: 24px vertical, 24px horizontal. No border radius.

### Header Nav Link

**Role:** Primary navigation items in the header.

Text is 'Printmaker Blue' (#1664eb), font 'BaselGrotesk Book' 14px weight 400. On hover, a border appears, colored 'Printmaker Blue' (#1664eb).

### Product Listing Card

**Role:** Container for individual product items in a grid.

Background is transparent, text for title and price is 'Ink Black' (#121212) using 'BaselGrotesk Book'. Image is central. No explicit border or shadow, relying on spacing and clear areas for definition.

## Do's

- Use 'Faded Paper' (#f8f7ef) as the primary page background to maintain the consistent paper-like canvas.
- Apply 'Printmaker Blue' (#1664eb) selectively for interactive text, primary links, and accent borders to ensure it remains a potent visual highlight.
- For headlines, prioritize 'OTMagisterUnlicensedTrial Regular' at 62px, 'BaselGrotesk Book' or 'BaselGrotesk Regular' at larger sizes (32px, 41px), employing negative letter-spacing for impact.
- Structure content using defined element gaps: 5px for close internal elements, 19px for card padding, and 42px for distinct section breaks.
- Maintain zero border radius across all UI elements (buttons, inputs, cards) to preserve the sharp, print-inspired aesthetic.
- When displaying product imagery, ensure it is unmasked and contained, allowing the product itself to be the central visual focus.

## Don'ts

- Avoid using gradients or drop shadows as primary visual cues; the design relies on flat colors and distinct typography.
- Do not introduce additional saturated colors; restrict the palette to primary brand blue, neutrals, and incidental chromatic link colors to maintain focus.
- Refrain from using 'Arial' for prominent headings or marketing copy; reserve it for utility text or smaller functional elements.
- Do not set border-radius on any component; the site's aesthetic is characterized by sharp, defined edges.
- Avoid heavy borders or solid backgrounds on informational cards or product listings; maintain an open, airy feel with minimal visual clutter.

## Similar Brands

| Business | Why |
| --- | --- |
| It's Nice That | Combination of bold typography, curated imagery as content, and a strong editorial feel with a clean, light base. |
| Printed Matter | Focus on risograph and independent publishing, with a similar emphasis on raw product presentation and a slightly utilitarian design aesthetic. |
| Doane Paper | Clean, almost minimalist design featuring stationery and paper products, using strong typography and ample negative space. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #121212
background: #f8f7ef
border: #1664eb
accent: #1664eb
primary action: #1664eb (outlined action border)

Example Component Prompts:
1. Create a product hero section: 'Faded Paper' (#f8f7ef) background. Headline 'What's on: Latest' uses 'OTMagisterUnlicensedTrial Regular' 62px, 'Ink Black' (#121212), letter-spacing -0.99px. Body text below uses 'BaselGrotesk Book' 16px, 'Ink Black' (#121212).
2. Design a product listing card: transparent background. Image at top. Product title 'Rainbow' uses 'BaselGrotesk Book' 14px, 'Ink Black' (#121212). Price '€27,00' uses 'BaselGrotesk Book' 14px, 'Ink Black' (#121212).
3. Develop a navigation link: 'Shop' uses 'BaselGrotesk Book' 14px 400 weight, 'Printmaker Blue' (#1664eb). Set border-bottom to 1px solid 'Printmaker Blue' (#1664eb) on hover.
4. Create a footer utility button: 'Skip to content' uses 'Arial' 13px 400 weight, 'Ink Black' (#121212) text on transparent background. Left padding 19.2px, right padding 43.2px, 0px vertical. No border radius.
5. Generate an input field for email signup: 'Faded Paper' (#f8f7ef) background, 'Printmaker Blue' (#1664eb) text, 'BaselGrotesk Book' 26px 400 weight, letter-spacing +0.65px. Border-bottom is 2px solid 'Printmaker Blue' (#1664eb). Add 24px padding on all sides.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521518478-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521518478-thumb.jpg |
