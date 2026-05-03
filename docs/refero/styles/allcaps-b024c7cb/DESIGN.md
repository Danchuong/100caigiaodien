# AllCaps — Refero Style

- Refero URL: https://styles.refero.design/style/b024c7cb-c0b6-413d-9caf-5fec7ed5071e
- Site URL: https://www.allcapstype.com
- ID: b024c7cb-c0b6-413d-9caf-5fec7ed5071e
- Theme: light
- Industry: design
- Created: 2026-04-30T01:59:39.405Z
- Ranks: newest: 470, popular: 892, trending: 834

> Typographic Playground, Neon Pop

## Description

AllCaps is a stark, high-contrast system where typography takes center stage, often acting as the primary visual element. It uses pure white canvases and deep black text, punctuated by bold, almost neon, fuchsia and an unexpected violet. This creates an energetic and unconventional aesthetic focused on typographic expression rather than complex layouts or decorative elements. Surfaces are flat, and interactions are minimal, emphasizing direct visual communication.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, input backgrounds |
| Ink Black | #000000 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Action Fuchsia | #ff003c | brand | Red outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Neon Violet | #e508ff | accent | Pink wash for highlight backgrounds, decorative bands, and soft emphasis behind content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| MG ALLCAPS | Montserrat | 400, 475 | 12px, 16px | 1.15, 1.22 | Primary typeface for all UI text, headings, and body content. Its custom nature and varying letter-spacing contribute to the unique typographic voice. |
| Bandit Luv | Pacifico | 400 | 32px, 432px | 0.75, 1.15 | Decorative display font for large, brand-specific statements, creating a playful, emphatic effect. |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "3.33333px",
    "default": "0px",
    "special": "16px"
  },
  "elementGap": "7px",
  "sectionGap": "29px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive elements for navigation and secondary actions.

Transparent background, Ink Black text, no borders or padding directly on the element itself, giving a 'ghost' appearance. Radius of 0px.

### Font Specimen Card

**Role:** Display individual typeface styles.

Transparent background, no border, no shadow, and 0px padding. Text is Ink Black from MG ALLCAPS, showcasing different weights and styles. Vertical gap between items is 14px. No specific radius.

### Style Tag

**Role:** Indicate available styles or status.

Small, functional tags with Neon Violet background and Canvas White text, featuring a 3.33333px border radius. Padding of 2px top/bottom and 7px left/right.

### Purchase Callout Badge

**Role:** Small, immediately visible purchase link within a product listing.

Small button with Neon Violet background (#e508ff), Canvas White text (#ffffff). No distinct padding/radius specified on the button itself, often appears directly adjacent to text.

### Minimal Input Field

**Role:** User input for forms.

Canvas White background, Ink Black text. Borders are present but often subtle or contextually defined. Top and bottom padding of 4px. Radius is 0px.

## Do's

- Always use Ink Black (#000000) for all text and UI outlines unless explicitly specified as an accent.
- Utilize Canvas White (#ffffff) as the dominant background color for all pages and components to maintain a stark, high-contrast look.
- Apply Action Fuchsia (#ff003c) sparingly for decorative elements or specific highlight borders to draw attention.
- Employ Neon Violet (#e508ff) for background accents on small components like tags, ensuring high contrast with Canvas White text.
- Keep all component borders and radii at 0px by default, except for specific tags which use 3.33333px.
- Maintain a compact density with an element gap of 7px and section gap of 29px.
- Leverage the MG ALLCAPS font for all primary text content, using its variable weight and letter-spacing for typographic expression.

## Don'ts

- Avoid using multiple colors for text or borders; maintain the strict Ink Black and Canvas White contrast.
- Do not introduce shadows or complex elevation; the system is characteristically flat.
- Do not use generic system fonts; MG ALLCAPS and Bandit Luv are essential for brand identity.
- Refrain from adding decorative gradients or elaborate backgrounds; stick to solid colors.
- Do not introduce inconsistent padding on buttons or cards; maintain 0px padding and 0px radius for most interactive elements.
- Avoid breaking line height relationships, particularly with MG ALLCAPS, to preserve the intended typographic density.

## Similar Brands

| Business | Why |
| --- | --- |
| Future Fonts | Showcases typefaces with minimal UI, letting the typography shine, often using stark contrasts and adventurous display fonts. |
| OHNO Type Co. | Focus on experimental type design with a dark/light contrast, often featuring large, impactful type as primary imagery. |
| Pangram Pangram Foundry | Clean, typographic-focused design, frequently using black and white palettes with a single vibrant accent color. |
| Grilli Type | Prioritizes typography within a clean, high-contrast digital environment, utilizing minimal UI elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #ff003c
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header navigation item: 'Typefaces' text in MG ALLCAPS, weight 400, size 16px, line height 1.22, letter-spacing -0.013em, color #000000. No background, no border, 0px radius.
2. Design a simple text input: Canvas White background (#ffffff), Ink Black text (#000000), 4px padding-top and padding-bottom, 0px border-radius, 1px solid Ink Black border.
3. Create a 'Buy' tag: Neon Violet background (#e508ff), Canvas White text (#ffffff), 3.33333px border-radius, 2px vertical padding, 7px horizontal padding. Text in MG ALLCAPS, weight 400, size 12px.
4. Design a large brand title: 'A11Caps' in Bandit Luv, weight 400, size 432px, line height 0.75, color #ff003c. Place on a Canvas White (#ffffff) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514360805-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514360805-thumb.jpg |
