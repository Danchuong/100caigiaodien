# Flecto — Refero Style

- Refero URL: https://styles.refero.design/style/fdc72952-9b36-443a-9e0c-20b366aee29f
- Site URL: https://flecto.io
- ID: fdc72952-9b36-443a-9e0c-20b366aee29f
- Theme: light
- Industry: saas
- Created: 2026-04-30T01:37:21.721Z
- Ranks: newest: 560, popular: 934, trending: 897

> Rounded emerald portal

## Description

Flecto employs a high-contrast dark green canvas accented by a vibrant, energetic lighter green for key interactive elements. Rounded corners are ubiquitous, creating a soft, approachable aesthetic for sections and components. Typography is crisp and modern, featuring custom sans-serif fonts with subtle letter-spacing variations to enhance legibility and visual rhythm. The overall impression is one of structured friendliness, with clear visual hierarchy driven by color and shape rather than complex elevation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Emerald Canvas | #004737 | brand | Teal accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Mint Accent | #56f09f | accent | Vivid accent color for primary buttons, active states, highlighted cards, and decorative icons. Creates a strong visual focal point against the Emerald Canvas |
| Paper White | #fffbec | neutral | Secondary background for header, select cards, and areas requiring visual separation. Provides a bright contrast to the main canvas |
| Off Black | #032019 | neutral | Primary text color for dark backgrounds, dark footer elements, and some borders |
| Soft Mint | #d4ffe8 | accent | Lighter accent for ghost button borders, subtle highlights, and background washes. Provides a softer interaction point than Mint Accent |
| Muted Sage | #99b5af | neutral | Secondary text color, muted icon details, and borders for inactive list items |
| Cream Card | #faf2d5 | neutral | Subtle background for specific cards, offering a warmer neutral alternative to Paper White |
| Deep Violet | #8f37ff | accent | Decorative accent color, used for specific data points or icon strokes to provide a punch of distinct hue |
| True Black | #000000 | neutral | Icon fills and very subtle borders on white backgrounds |
| Pure White | #ffffff | neutral | Primary page canvas and white card surfaces. Do not promote it to the primary CTA color |
| Dark Wolf | #222222 | neutral | Default text on light backgrounds and borders for some neutral ghost buttons |
| Grey Shadow | #ccdad7 | neutral | Delicate borders and subtle background tints, often seen around elements on light surfaces |
| Stone Grey | #939393 | neutral | Muted text or placeholder text in light contexts |
| Light Moss | #afc5c0 | neutral | Subtle background or border color in content areas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Aeonik | Inter | 400 | 8px, 9px, 10px, 11px, 12px, 13px, 14px, 15px, 16px, 17px, 18px, 19px, 20px, 24px, 26px, 28px, 32px, 33px, 36px, 56px, 60px, 64px, 66px, 74px | 1.00, 1.10, 1.14, 1.15, 1.20, 1.22, 1.23, 1.29, 1.30, 1.38, 1.40, 1.44, 1.46, 1.50, 1.60, 1.67, 1.86, 1.92, 1.94, 2.03, 2.09, 2.12, 2.79, 2.88 | Primary display and body font, used for most headings, prominent text, and UI elements. The `tnum` feature ensures uniform numbers, while the varied letter-spacing provides a distinct, modern texture to headlines and smaller text alike. |
| roobert-regular | Inter | 400 | 12px, 16px | 1.40, 1.87 | Secondary body font for supporting text, navigation items, and descriptive content. Maintains legibility at smaller sizes with standard letter-spacing. |
| Arial |  | 400 | 16px | 1.2 | Arial — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.4 |  |
| subheading | 24 | 1.2 |  |
| heading | 36 | 1.14 |  |
| heading-lg | 56 | 1 | -0.2 |
| display | 74 | 1 | -0.43 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "60px",
    "buttons": "10px",
    "default": "19px",
    "sections": "40px",
    "iconButtons": "100%",
    "smallWidgets": "5.76px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "12px",
  "pageMaxWidth": "174px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action button for primary actions

Background: Mint Accent (#56f09f), Text: Off Black (#032019), Padding: 12px horizontal, 0px vertical (implied by content height). Border radius: 10px. Uses Aeonik font, weight 400.

### Ghost Button

**Role:** Secondary action or navigation link

Background: transparent (rgba(0,0,0,0)), Text: Dark Wolf (#222222), Border: 1px solid Dark Wolf (#222222), Padding: 0px vertical, 12px-24px horizontal. Border radius: 0px. Uses Aeonik font at 16px.

### Outlined Button (Emerald)

**Role:** Call to action with brand emphasis, but not filled.

Background: transparent (rgba(0,0,0,0)), Text: Emerald Canvas (#004737), Border: 1px solid Emerald Canvas (#004737), Padding: 0px. Border radius: 0px. Uses Aeonik font.

### Outlined Button (Soft Mint)

**Role:** Call to action with subtle brand emphasis, typically on dark backgrounds.

Background: transparent (rgba(0,0,0,0)), Text: Soft Mint (#d4ffe8), Border: 1px solid Soft Mint (#d4ffe8), Padding: 0px. Border radius: 0px. Uses Aeonik font.

### Pill Button (Text)

**Role:** Small, rounded control or category tag.

Background: transparent (rgba(0,0,0,0)), Text: Dark Wolf (#222222), Border: 1px solid Dark Wolf (#222222), Border radius: 100% (full pill shape).

### Basic Card

**Role:** Content container on Paper White backgrounds.

Background: Pure White (#ffffff), Border radius: 10px 0px 0px 10px, Shadow: rgba(0, 0, 0, 0.04) 0px 3px 2px 0px, Padding: 20px vertical, 0px horizontal.

### Highlight Card (Mint)

**Role:** Prominent information card or feature highlight.

Background: Mint Accent (#56f09f), Border radius: 19.2px, no shadow, no explicit padding (assumed content-driven).

### Dark Card (Emerald)

**Role:** Content card on light backgrounds, creating strong contrast.

Background: Emerald Canvas (#004737), Border radius: 14.4px, no shadow, no explicit padding (assumed content-driven).

### Plain Card

**Role:** Simple content grouping without visual emphasis.

Background: transparent (rgba(0,0,0,0)), Border radius: 0px, no shadow, Padding: 28.8px.

## Do's

- Prioritize Emerald Canvas (#004737) as the dominant background color for full-bleed sections to establish brand identity.
- Use Mint Accent (#56f09f) exclusively for primary calls to action, active indicators, and key highlights to maintain its impact.
- Apply a default border-radius of 19px for most card-like elements and content containers for a consistently soft appearance.
- Use the Aeonik font with varied letter-spacing as outlined in the typography section for all headings and prominent text.
- Ensure interactive components primarily use rounded shapes, with specific radii like 10px for buttons and 40px for larger section containers.
- Design for a 'compact' density, using 10px as the default element gap to group related items closely.
- Prefer outlined buttons using brand colors (Emerald Canvas or Soft Mint) over filled neutral buttons for secondary actions or links.

## Don'ts

- Avoid using multiple vivid accent colors; restrict strong chromatic accents to Mint Accent (#56f09f).
- Do not break the established rounding pattern; avoid sharp corners for interactive elements or cards unless explicitly part of a decorative shape.
- Do not use generic system fonts for headings; always use Aeonik for brand consistency and its distinct letter-spacing.
- Avoid excessive use of shadows; stick to the rgba(0, 0, 0, 0.04) 0px 3px 2px 0px for discrete card elevation only.
- Do not introduce large, open whitespace between elements; maintain the 'compact' density for optimal information display.
- Avoid using Cream Card (#faf2d5) as a primary background; reserve it for specific card surfaces to provide subtle variation.
- Do not use Emerald Canvas (#004737) for body text on light backgrounds; use Dark Wolf (#222222) instead for readability.

## Layout

The page primarily uses a contained layout with a maximum width of 174px for content blocks, centered within the browser. The hero section features a full-bleed Emerald Canvas (#004737) background with a large, centered headline and a graphic. Sections often alternate between full-bleed brand color (Emerald Canvas) and a contained Paper White (#fffbec) or Pure White (#ffffff) background. Vertical section rhythm is consistent, with clear visual breaks between blocks. Content is often arranged in visually distinct blocks that occasionally feature rounded cutouts and overlays. Navigation is a simple top bar with a sticky header and minimal links.

## Imagery

This site features abstract, geometric visual elements, particularly a key-like graphic constructed from pixelated blocks. There are no photographs or complex illustrations. Icons are outlined, mono-color, and minimal, matching the clean UI aesthetic. Visual space is dominated by UI elements and typography, with graphics serving primarily as decorative atmosphere and brand representation rather than explanatory content. Image density is low.

## Elevation

| Element | Style |
| --- | --- |
| Basic Card | rgba(0, 0, 0, 0.04) 0px 3px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Keyhole | Shares a strong brand-color focused aesthetic with minimal neutrals, and distinctively rounded interactive elements. |
| Paddle | Uses bright accent colors against darker backgrounds and has a similar modern, bold typography approach in headlines. |
| Pitch | Employs clean, structured layouts with a focus on geometric shapes and a limited, high-impact color palette against white or dark canvases. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #032019
background: #004737
border: #004737
accent: #56f09f
primary action: #004737 (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #004737 border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Create a Hero Section with Emerald Canvas background: Headline 'Unlock your Potential' in Aeonik, 74px, weight 400, White (#ffffff), letter-spacing -0.43px. Sub-headline 'Your future is now' in Aeonik, 24px, weight 400, Soft Mint (#d4ffe8).
3. Create a Basic Card on Paper White background: Text 'Card Title' in Aeonik, 36px, weight 400, Dark Wolf (#222222). Body text 'Card description here' in roobert-regular, 16px, weight 400, Dark Wolf (#222222). Background Pure White (#ffffff), border-radius 10px 0px 0px 10px, box-shadow rgba(0, 0, 0, 0.04) 0px 3px 2px 0px.
4. Create an Outlined Button (Soft Mint): Background rgba(0,0,0,0), text Soft Mint (#d4ffe8), border 1px solid Soft Mint (#d4ffe8), border-radius 0px. Text 'Learn More' using Aeonik font, weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513020565-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513020565-thumb.jpg |
