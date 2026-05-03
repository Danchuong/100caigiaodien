# Tech Barcelona — Refero Style

- Refero URL: https://styles.refero.design/style/271172f7-9f6d-4d6f-9baa-91a41648d8be
- Site URL: https://techbarcelona.com/en
- ID: 271172f7-9f6d-4d6f-9baa-91a41648d8be
- Theme: light
- Industry: other
- Created: 2026-04-30T02:29:49.606Z
- Ranks: newest: 362, popular: 973, trending: 825

> High-contrast geometric blueprint

## Description

Tech Barcelona uses a bold and graphic black-and-white canvas, punctuated by a single vibrant blue accent. The typography is compact and confident, primarily utilizing a light-weight sans-serif for both headings and body text, establishing an authoritative yet accessible tone. Components are sharp and unfussy, favoring crisp borders and minimal elevation over elaborate styling, with a strong emphasis on a clear, almost monochromatic visual hierarchy that directs attention to key information and interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, deep surface backgrounds, strong borders — establishing a high-contrast foundation for content |
| Canvas White | #ffffff | neutral | Page backgrounds, surface accents, white text on dark backgrounds, ghost button borders |
| Ink Text | #212529 | neutral | Secondary text, dark navigation links, default icon fills, default button borders |
| Light Gray Divider | #cccccc | neutral | Subtle borders, dividers, ghost button borders in light contexts |
| Headline Black | #090707 | neutral | Dominant headlines, large text blocks for brand emphasis |
| Ice Blue Accent | #0075ff | brand | Primary action buttons, interactive highlights, navigational indicators — providing a vivid, singular point of interest |
| Shadow White | #eeeeee | neutral | Subtle button shadow, hinting at minimal elevation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FavoritPro-Light | Open Sans, Arial | 400 | 10px, 12px, 13px, 14px, 16px, 18px, 20px, 22px, 50px, 80px | 1.00, 1.14, 1.15, 1.20, 1.30, 1.33, 1.50, 1.59 | The primary typeface for all text elements. The consistently light weight (400) across all sizes creates a refined, understated authority, resisting the common tendency to use bold weights for emphasis. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.9 |
| body | 14 | 1.5 | 0.08 |
| heading-sm | 18 | 1.33 |  |
| heading | 20 | 1.2 |  |
| heading-lg | 22 | 1.15 |  |
| display | 50 | 1.14 | -0.01 |
| display-xl | 80 | 1 | -0.045 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "50px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button for main calls to action.

Filled with Ice Blue Accent (#0075ff), text in Canvas White (#ffffff). Padding of 16px top, 27px right, 17px bottom, 28px left. No border radius.

### Ghost Bordered Button

**Role:** Secondary action button with a border and transparent background.

Transparent background, text in Canvas White (#ffffff). Border is 1px solid Canvas White (#ffffff). Padding of 5px top, 10px right, 5px bottom, 10px left. No border radius.

### Text Link Button

**Role:** Tertiary action or navigational link styled as a button.

Transparent background, text in Ink Text (#212529). Border is 1px solid Ink Text (#212529) only on the bottom. No padding or border radius.

### White Text Link Button

**Role:** Text link for navigation or small actions on dark backgrounds.

Transparent background, text in Canvas White (#ffffff). No border or padding specified, implying inline link styling.

### Muted Card

**Role:** Container for content, particularly news items.

Transparent background, no shadow, no border radius. Implied padding is 0px.

## Do's

- Prioritize high-contrast combinations using Midnight Ink (#000000), Canvas White (#ffffff), and Ink Text (#212529) for all textual content to maintain strong legibility.
- Utilize Ice Blue Accent (#0075ff) exclusively for primary calls to action or key interactive states, ensuring it remains a distinct highlight.
- Maintain sharp, 0px border radii for all components, including buttons and cards, to reinforce the geometric and precise aesthetic.
- Employ FavoritPro-Light (weight 400) for all typography, adjusting font size instead of weight for hierarchy, following the established type scale.
- Apply the subtle Shadow White (#eeeeee) box shadow (1px 1px 0px 0px) to interactive elements like buttons to provide slight depth without heavy elevation.
- Use Light Gray Divider (#cccccc) for hairline borders and subtle separations, offering visual breaks without introducing strong contrast.

## Don'ts

- Avoid using multiple accent colors; Ice Blue Accent (#0075ff) is the sole chromatic highlight.
- Do not introduce rounded corners; all elements should adhere to the 0px border-radius.
- Refrain from using bold or heavy font weights for emphasis; leverage letter spacing and size from the type scale instead.
- Do not apply drop shadows to cards or general surfaces; reserve soft shadows for interactive elements as defined.
- Avoid decorative gradients or complex backgrounds; maintain a flat, high-contrast, black-and-white base.
- Do not use padding less than 10px for button content, unless it is a purely text-based link button.

## Layout

The page primarily uses a max-width contained layout, though the hero section can be full-bleed with a large, centered headline against a dark background or with an architectural image. Sections exhibit strong vertical rhythm with consistent spacing, often alternating between dark (Midnight Ink) and light (Canvas White) backgrounds. Content is organized in clear, stacked blocks and implicit two-column layouts where text and visuals interact. Navigation is confined to a persistent top bar featuring minimal links and a high-contrast 'Join Us' button.

## Imagery

This design system uses a minimalist approach to imagery, primarily employing the brand's geometric, QR-code-like logo as a decorative background element or prominent identifier. Photography is used sparingly and appears to be real-world architectural shots, acting as contextual backdrops rather than focal points. Icons are monochrome, simple, and functional, likely either filled or outlined with a fine stroke, adhering to the stark black-and-white aesthetic. Imagery serves primarily as atmospheric context or brand reinforcement, with a very high textual density across the site.

## Elevation

| Element | Style |
| --- | --- |
| Button | rgb(238, 238, 238) 1px 1px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Monochromatic approach with a single, clear accent color and strong typographic hierarchy. |
| Linear | Emphasis on high contrast, clean lines, and a structured, functional aesthetic without decorative elements. |
| GitHub | Code-editor like clarity, high information density, and precise use of typography and subtle borders. |
| Vercel | Minimalist design with a focus on core content, clear interactive elements, and a stark black/white palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #212529
background: #ffffff
border: #cccccc
accent: #0075ff
primary action: #0075ff (filled action)

Example Component Prompts:
Create a Primary Action Button: #0075ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
Create a navigation item: White Text Link Button with text 'Community', Canvas White (#ffffff), 14px FavoritPro-Light, 0.08em letter spacing.
Create a content card for a featured story: Muted Card with a Midnight Ink (#000000) background. Heading at 22px FavoritPro-Light, Canvas White (#ffffff). Body text at 14px FavoritPro-Light, Canvas White (#ffffff). Add a Light Gray Divider (#cccccc) as a bottom border to separate from other elements.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516173184-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516173184-thumb.jpg |
