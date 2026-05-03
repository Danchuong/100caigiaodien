# Beau — Refero Style

- Refero URL: https://styles.refero.design/style/c73ba3d8-42fe-4d53-bec1-b6643949c582
- Site URL: https://beau.to
- ID: c73ba3d8-42fe-4d53-bec1-b6643949c582
- Theme: light
- Industry: saas
- Created: 2026-04-30T03:48:13.480Z
- Ranks: newest: 61, popular: 1210, trending: 1210

> monochrome precision, vibrant core

## Description

Beau employs a crisp, structured aesthetic with a high-contrast monochrome palette. The design emphasizes clear information hierarchy through distinct text sizing and weight, creating a feeling of efficient precision. Components are lightweight and purposeful, relying on shape and direct color contrast rather than heavy ornamentation or shadows. A striking multi-color gradient introduces vibrancy in specific sections, acting as an energetic backdrop for otherwise stark content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, active states for text and icons. Provides a bright, expansive base for all content |
| Midnight Ink | #000000 | neutral | Primary text, button backgrounds, strong borders, dark card surfaces. Establishes a bold and clear contrast against Canvas White |
| Subtle Gray | #999999 | neutral | Secondary text, muted headings, subtle borders. Used for information that needs to recede slightly from primary content |
| Whisper Gray | #666666 | neutral | Tertiary text, descriptive labels, less emphasized content. Creates a softer textual presence |
| Silver Mist | #b3b3b3 | neutral | Subtle background fill, badge backgrounds. Provides a soft, slightly-there surface |
| Electric Gradient | #ff8308 | accent | Decorative background for energetic sections, feature highlights. Brings a dynamic and modern feel to the monochrome scheme |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Geist | system-ui, sans-serif | 400, 500 | 14px, 17px, 20px, 28px, 33px, 40px, 56px | 1.10, 1.15, 1.20, 1.30, 1.40 | The primary typeface for all text content, from headings to body text. Its clean, geometric forms, combined with specific letter-spacing and feature settings, contribute to the precise and modern feel. The slight negative letter-spacing for larger sizes enhances visual density without sacrificing legibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.4 | -0.14 |
| body | 17 | 1.4 | -0.17 |
| subheading | 20 | 1.3 | -0.2 |
| heading | 28 | 1.2 | -0.28 |
| heading-lg | 33 | 1.15 | -0.33 |
| display | 40 | 1.1 | -0.4 |
| display-lg | 56 | 1.1 | -1.12 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "buttons": "200px"
  },
  "elementGap": "24px",
  "sectionGap": "72px",
  "cardPadding": "24px",
  "pageMaxWidth": "1428px"
}
```

## Components

### Primary Action Button

**Role:** Main call to action button.

Filled with Midnight Ink (#000000) with Canvas White (#ffffff) text. Features a highly rounded 200px border-radius, emphasizing its actionable nature. Padding is 0px vertical and 18px horizontal, with internal text dictating height.

### Ghost Action Button

**Role:** Secondary action button, or for navigation.

Outlined in Canvas White (#ffffff) with matching text. Also features a 200px border-radius for consistency. No vertical padding, 18px horizontal padding.

### White Card

**Role:** Content container for features or information.

Background is Canvas White (#ffffff), with a subtle shadow (rgba(0,0,0,0.06) 0px 2px 6px 0px). Corners are rounded at 6px. Inner padding of 24px on all sides.

### Dark Card

**Role:** Container for content in dark mode sections.

Solid Midnight Ink (#000000) background, no shadow. Corners are rounded with a 6px radius. Inner padding of 24px on all sides.

### Compact Tag Badge

**Role:** Informational tags or status indicators.

Background is Silver Mist (rgba(0,0,0,0.3) which is effectively #b3b3b3 with lower opacity in a light context) with Canvas White (#ffffff) text. Features 6px border-radius. Padding is 12px vertical and 18px horizontal.

## Do's

- Prioritize high-contrast pairing of Midnight Ink (#000000) and Canvas White (#ffffff) for primary content and actions.
- Use Geist at weight 400 for body text and 500 for headlines, ensuring the specified letter-spacing for optimal legibility.
- Apply a 200px border-radius to all buttons for a consistent, soft pill shape, and 6px to cards for subtle corner rounding.
- Use a base unit of 6px for all spacing decisions, translating to common elements gaps of 24px and section gaps of 72px.
- Introduce the Electric Gradient (linear-gradient(135deg, rgb(255, 131, 8), rgb(255, 80, 67) 50%, rgb(57, 43, 213))) sparingly as a background for impactful, energetic sections only.
- When using cards, default to Canvas White (#ffffff) with a soft shadow (rgba(0,0,0,0.06) 0px 2px 6px 0px) to indicate elevated content.

## Don'ts

- Avoid using saturated colors other than Electric Gradient; maintain a strict monochrome palette for all other UI elements.
- Do not use heavy, complex shadows; only apply the subtle rgba(0,0,0,0.06) 0px 2px 6px 0px shadow for elevated cards.
- Do not vary border radii significantly; stick to 200px for buttons/pills and 6px for cards/containers.
- Do not use generic system fonts; always utilize Geist with its specific weights and font feature settings for brand consistency.
- Avoid excessive use of the Electric Gradient; it should act as a highlight, not a dominant background for all sections.
- Do not create complex multi-layered backgrounds; surfaces should primarily be Canvas White or Midnight Ink for clarity.

## Layout

The typical page layout is a max-width 1428px centered container, with full-width sections that internally constrain content. The hero section often features a centered headline over a white background. Sections establish rhythm through consistent 72px vertical spacing. Content is arranged in alternating patterns, such as text on one side and a product UI screenshot/illustration on the other. Feature sections utilize grids of cards, and prominent information is often presented in centered, stacked blocks for clarity.

## Imagery

Imagery primarily consists of product screenshots and abstract UI representations, often presented on dark backgrounds or within contained sections. These are treated with soft 6px rounded corners, matching the card aesthetic. There are no full-bleed photographs or lifestyle imagery. Icons appear to be outlined, monochrome (black or white, depending on background), with a medium stroke weight, serving an explanatory and decorative role at a medium density.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochrome UI with sharp typography, minimal surface textures, and deliberate use of spacing for clarity. |
| Stripe | Clean, predominantly white canvas with strong dark typography, subtle card elevation, and a distinct lack of heavy ornamentation. |
| Vercel | Emphasis on high-contrast text and dark elements on a light background, paired with a modern, technical typeface and minimalist component design. |
| Supabase | Uses a dark-mode inspired aesthetic (black on white contrasts) even in a light theme, with clean, rounded interactive elements. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
text: #000000
background: #ffffff
border: #999999
accent: #ff8308
primary action: #000000 (filled action)

**3-5 Example Component Prompts**
1. Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a feature card: White Card component with padding 24px, containing a heading 'Reduce cycles by 75%' in Geist weight 500, size 28px, Midnight Ink (#000000), letter-spacing -0.28px. Below it, add body text 'No more back-and-forth emails requesting corrections' in Geist weight 400, size 17px, Whisper Gray (#666666).
4. Show a status badge: Use the Compact Tag Badge component with text 'Pending Review' in Canvas White (#ffffff), with Silver Mist background (rgba(0,0,0,0.3)), 12px vertical padding, 18px horizontal padding, 6px border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520870731-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520870731-thumb.jpg |
