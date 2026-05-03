# Base — Refero Style

- Refero URL: https://styles.refero.design/style/530eb4cf-7e75-4833-95c9-746818050db7
- Site URL: https://www.base.org
- ID: 530eb4cf-7e75-4833-95c9-746818050db7
- Theme: light
- Industry: crypto
- Created: 2026-04-30T00:35:34.371Z
- Ranks: newest: 753, popular: 577, trending: 429

> Digital blueprint, on-chain precision.

## Description

Base projects a precise, technical elegance with a high-contrast achromatic canvas punctuated by a single vibrant violet accent. Typography is dominant, employing a stark sans-serif for headlines and a more functional family for body text, creating a strong editorial feel. UI elements are compact, utilizing ghost buttons and minimal borders to maintain a lightweight, ethereal presence while the branding color provides clear, unambiguous interactive states. The overall impression is digital, modular, and performance-oriented.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button text (when on primary brand color) |
| Ink Black | #000000 | neutral | Primary text, strong headings, button borders (neutral ghost), general UI elements |
| Haze Gray | #f2f2f2 | neutral | Subtle background for navigation elements, soft dividers |
| Twilight Graphite | #323232 | neutral | Navigation borders, denser text elements |
| Muted Ash | #999999 | neutral | Secondary text, metadata, subtle informational elements |
| Slate Mist | #b1b7c3 | neutral | Muted navigation text, tertiary UI text and icon fills |
| Vivid Cobalt | #0000ff | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Subtle Granite | #717886 | accent | Outlined button borders, ghost link text, supporting body copy, providing contrast without being heavy |
| Emerald Green | #098551 | accent | Green decorative accent for icons, marks, and small graphic details. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| doto | Montserrat | 400, 700 | 16px, 115px | 0.70, 1.50 | Display and prominent headings. The extreme letter-spacing and varied line heights suggest a highly crafted, almost artistic use of typography for visual impact rather than pure body text readability. |
| coinbaseSans | Inter | 400, 500 | 12px, 14px, 15px, 16px, 32px, 80px, 110px | 0.70, 1.00, 1.13, 1.14, 1.30, 1.33, 1.50 | Large headings and callouts, designed for impact and clarity, providing an extended typographic range for key messaging. |
| coinbaseDisplay | Open Sans | 400 | 14px, 16px | 1.14, 1.43, 1.50 | Base body text. Its compact line-height and normal letter spacing optimize for content density without sacrificing readability. |
| coinbaseMono | Roboto Mono | 350, 400 | 12px, 14px | 0.90, 1.43 | Monospaced text for code snippets, data readouts, or elements requiring distinct visual separation due to their technical nature. The generous letter spacing enhances legibility for short code-like strings. |
| baseSans | Inter | 400 | 18px | 1.30 | Secondary body text and detailed descriptions. Its slightly larger size and tighter letter-spacing distinguish it from the main body copy, adding a touch of elegance for longer content blocks. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.14 |  |
| body-sm | 14 | 1.14 |  |
| body | 15 | 1.14 |  |
| body-lg | 16 | 1.14 |  |
| heading-sm | 32 | 1.14 |  |
| heading | 80 | 1.14 |  |
| heading-lg | 110 | 1.14 |  |

## Spacing & Shape

```json
{
  "radius": {
    "small": "2px",
    "default": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "12px",
  "pageMaxWidth": "1128px"
}
```

## Components

### Ghost Navigation Item

**Role:** Primary navigation links in the sidebar

Text in Ink Black (#000000) or Slate Mist (#b1b7c3) on Canvas White (#ffffff) background. No distinct background or border, minimal padding of 10px on all sides, 8px border radius. Interactive state uses Vivid Cobalt (#0000ff) border and text color.

### Filled Primary Button

**Role:** Main call-to-action button

Background is Vivid Cobalt (#0000ff) with Canvas White (#ffffff) text. Uses 8px border radius, 4px vertical padding and 12px horizontal padding. Letter spacing is tight.

### Outlined Secondary Button

**Role:** Secondary or alternative actions

Transparent background with Subtle Granite (#717886) border and text. Uses 8px border radius and 10px general padding. Emphasizes action without visual weight.

### Informational Card

**Role:** Cards displaying product features or statistics

Canvas White (#ffffff) background. Padding is 12px. Uses an 8px border radius. Content typically includes a descriptive icon and text. Borders are minimal or absent.

## Do's

- Prioritize Ink Black (#000000) for all primary body text and headings.
- Use Haze Gray (#f2f2f2) sparingly for subtle background separation in navigation or soft dividers.
- Apply Vivid Cobalt (#0000ff) exclusively for interactive elements like buttons, active states, and links to maintain its impact.
- Maintain a compact button padding strategy: 4px vertical, 12px horizontal for filled buttons; 10px all-around for ghost/outlined buttons.
- Employ an 8px border radius for all interactive elements and informational cards, with an optional 2px radius for very small elements.
- Use 'doto' for display headlines requiring maximal visual impact, applying the specified negative letter-spacing for density.
- Ensure the page-level content is contained within a max-width of 1128px.

## Don'ts

- Do not introduce new chromatic colors outside of Vivid Cobalt (#0000ff) and Emerald Green (#098551) to avoid diluting the brand palette.
- Avoid heavy shadows or gradients, preserving the lightweight and flat aesthetic of surfaces.
- Do not use `coinbaseDisplay` for body copy; reserve it for clear, focused text blocks.
- Do not deviate from the established letter-spacing values for display and heading typography; these are critical for visual identity.
- Avoid complex, multi-layered backgrounds; keep canvas and card surfaces clean and monochromatic.
- Do not use generic button styles; stick to the Ghost, Outlined, and Filled variants with their predefined color and radius tokens.
- Do not use base unit multiples other than 4px for spacing decisions.

## Layout

The page maintains a centered max-width of 1128px for most content. The hero section features a large, stark headline centered over an abstract, faintly visible background graphic. Content sections alternate between full-width and centered text blocks. A prominent left-aligned sticky navigation bar features ghost links. Product features are presented in a 2x2 grid of informational cards that use the same abstract graphic style. Vertical rhythm is established by consistent 48px section gaps and compact element spacing within blocks.

## Imagery

The site uses abstract, geometric 3D renders with a wireframe or voxelated style. These graphics are primarily brand-colored (Vivid Cobalt, Emerald Green, Subtle Granite) against achromatic backgrounds, serving decorative and explanatory roles for product features. They are contained within their own sections, not full-bleed, and generally appear as symbolic representations rather than literal product screenshots. Icons are minimalist, outlined, and monochromatic, used sparsely to accompany text or data.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a precise, developer-first UI with a focus on typography and a limited, high-contrast color palette, often featuring abstract geometric product visuals. |
| Linear | Employs an achromatic color scheme with a single vibrant accent color for interactive states and strong emphasis, combined with crisp typography and clean card-based layouts. |
| Figma | Utilizes a clean, white-space dominant interface with a strong sans-serif type hierarchy and a distinct primary accent color (purple) for actions and branding. |
| Vercel | Features a strong emphasis on typography, high contrast, and a lean UI without heavy decoration, often using a dark-mode aesthetic but with similar principles applied to light mode elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000
- background: #ffffff
- border: #717886
- accent: #0000ff
- primary action: no distinct CTA color

Example Component Prompts:
- Create a primary navigation item: text 'Products' in Ink Black (#000000) against Canvas White (#ffffff) background, 8px radius, no visible border, with 10px padding on all sides. When active, text and left border should be Vivid Cobalt (#0000ff).
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
- Design an outlined secondary button: 'Connect Wallet' in Subtle Granite (#717886) text with a 1px Subtle Granite (#717886) border, 8px radius, on a transparent background, 10px padding on all sides.
- Create a feature card: title 'Base App' in Ink Black (#000000) using coinbaseDisplay weight 400 at 16px, body text in Subtle Granite (#717886) using coinbaseDisplay weight 400 at 14px, on a Canvas White (#ffffff) background. Include an abstract visual element at the top. Use 8px border radius and 12px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509310101-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509310101-thumb.jpg |
