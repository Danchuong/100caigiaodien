# Consumedinkey — Refero Style

- Refero URL: https://styles.refero.design/style/9d29d491-b705-46e1-9598-a4a70468e7e0
- Site URL: https://www.consumedinkey.com
- ID: 9d29d491-b705-46e1-9598-a4a70468e7e0
- Theme: light
- Industry: media
- Created: 2026-04-30T02:00:42.028Z
- Ranks: newest: 465, popular: 1006, trending: 959

> Monochrome starkness; an uncompromising canvas of text and light.

## Description

Consumedinkey's design system emanates a stark, minimalist severity, prioritizing content with an absolute monochrome palette. Typography, the primary visual element, is rendered in high-contrast against expansive, unblemished surfaces. The visual language is ascetic, focusing on direct communication and an almost complete absence of decorative components or background textures.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Pitch Black | #000000 | neutral | Primary text color, background for inverse sections, and the dominant cursor character. It provides unflinching contrast against Canvas White |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica LT | Arial | 400 | 14px, 16px, 40px, 64px | 1.00, 1.25 | The sole typeface, used for all textual content from headings to body text. Its neutral, legible character perfectly supports the site's spartan aesthetic, with varying sizes defining hierarchy through scale alone. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.25 | 0.56 |
| body | 16 | 1.25 | 0.64 |
| heading | 40 | 1 | 1.6 |
| display | 64 | 1 | 2.56 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "72px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Link Button

**Role:** Interactive navigation and calls-to-action.

Rendered as white text on a transparent background, with a subtle 1px white border on hover/focus. Uses Helvetica LT, weight 400, no explicit padding, and 0px border-radius, contributing to an understated interaction style.

### Primary Headline

**Role:** Section titles and prominent textual emphasis.

Large text using Helvetica LT, weight 400, in Pitch Black. Sizes include 40px and 64px, with line heights tuned for compact displays. No additional styling, relying purely on size and weight for impact.

### Body Text

**Role:** General content and explanatory paragraphs.

Helvetica LT, weight 400, in Pitch Black on Canvas White. Rendered at 14px or 16px, with a line height of 1.25. Maintains high legibility within the monochrome design.

## Do's

- Prioritize Canvas White (#ffffff) as the dominant background color for most sections, establishing a high-contrast foundation.
- Use Pitch Black (#000000) for all text and as the background for inverted sections (e.g., hero section).
- Implement Helvetica LT, weight 400, for all typographic needs, varying only the font size to create hierarchy.
- Apply a consistent letter-spacing of 0.0400em to all Helvetica LT text to maintain its defined character.
- Maintain a default border-radius of 0px for all elements, reinforcing the sharp, unadorned aesthetic.
- Utilize 72px as the standard vertical spacing between major page sections.
- Define interactive elements such as links and buttons with a transparent background, white text, and a 1px white border on interaction states to preserve the minimalist presentation.

## Don'ts

- Avoid the introduction of any chromatic colors; the palette is strictly monochrome.
- Do not use any shadows or gradients for elevation or decorative purposes.
- Refrain from using border-radius values other than 0px.
- Do not introduce additional font families or weights beyond Helvetica LT 400.
- Avoid using decorative imagery or complex graphic elements; visual focus should remain on typography and direct contrast.
- Do not add any padding to interactive link or button elements for a minimal, integrated appearance.

## Layout

The page adheres to a full-bleed layout, horizontally extending content to the viewport edges without a dedicated `pageMaxWidth`. Sections are delineated by shifts in background color (either Canvas White or Pitch Black) and a generous vertical `sectionGap` of 72px. The hero section often features oversized, centered typography. Content arrangement is primarily composed of large, single-column text blocks or simple two-column layouts, usually text-dominant. The navigation consists of discreet, non-intrusive `Ghost Link Buttons` positioned at the top corners of the page, blending into the background until hovered.

## Imagery

This site features a complete absence of conventional imagery. Instead, it relies on typography and the stark contrast of its monochrome palette to convey information and mood. The presence of a prominent black vertical bar (like a text cursor) in the hero section acts as a minimalist, abstract visual anchor. Icons are not present on the site, reinforcing its text-dominant, utilitarian approach. Density is extremely low, with ample negative space.

## Similar Brands

| Business | Why |
| --- | --- |
| A24 FILMS | Employs heavy use of monochrome, bold typography, and minimalist layouts for cinematic impact. |
| Massimo Vignelli's website | Adheres to a strict design philosophy using Helvetica, high contrast, and grid-based, unadorned layouts. |
| The Paragraphs (a design agency) | Features a very stark, text-heavy design with limited visual elements and a strong emphasis on typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #ffffff
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a full-bleed hero section: background #000000. Display text 'Consumed In Key' at 64px Helvetica LT weight 400, #ffffff, letter-spacing 2.56px, centered horizontally and vertically.
2. Create a body text section: background #ffffff. Body text 'Turbo Recordings presents its grandest achievement yet...' at 16px Helvetica LT weight 400, #000000, letter-spacing 0.64px. Set padding to 16px.
3. Create a navigation element for the top right: a Ghost Link Button, text 'Listen | Buy' at 14px Helvetica LT weight 400, #ffffff, letter-spacing 0.56px. Provide a 1px #ffffff border on hover. No padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514428220-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514428220-thumb.jpg |
