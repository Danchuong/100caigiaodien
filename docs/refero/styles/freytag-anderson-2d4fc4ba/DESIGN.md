# Freytag Anderson — Refero Style

- Refero URL: https://styles.refero.design/style/2d4fc4ba-2ea4-465f-8644-f3ff5c6713a2
- Site URL: https://www.freytaganderson.com
- ID: 2d4fc4ba-2ea4-465f-8644-f3ff5c6713a2
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:45:31.792Z
- Ranks: newest: 299, popular: 726, trending: 547

> Black canvas, stark typography

## Description

Freytag Anderson employs a minimalist, high-contrast aesthetic, building a visual language of quiet authority. Its dark-mode foundation with stark white typography creates dramatic legibility, while purposeful negative space and a constrained color palette emphasize content and text as primary visual elements. Interactions are subtle, relying on hover states and minimal accents rather than overt visual cues, conveying a sense of understated confidence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Dark | #000000 | neutral | Page backgrounds, primary text color for light elements on dark surfaces, borders for text-based components |
| Canvas Light | #fafafa | neutral | Primary text color for dark elements on light surfaces, background for certain components and hover states |
| Elevated Dark | #1c1c1c | neutral | Subtle background for layered elements over Canvas Dark |
| Subtle Dark | #141109 | neutral | Alternative subtle background, almost imperceptible against Canvas Dark |
| Muted UI Gray | #dcdcdc | neutral | Border colors for interactive elements, background for ghost buttons, secondary text color on dark backgrounds |
| Warm Hint Gray | #c2b5ae | neutral | Very subtle background for specific sections, adding warmth against the dark theme |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FAVORIT | Inter | 300, 400 | 15px, 17px, 41px | 1.00, 1.18, 1.20, 1.40, 1.70 | Primary typeface for all body text, links, buttons, and most headings. Its utilitarian feel supports the direct, no-nonsense brand message. |
| Clarkson | Open Sans | 300, 400 | 17px | 1.40, 1.70 | Used for specific supporting text, providing a slightly more structured but still understated alternative to FAVORIT. |
| halyard-display | Roboto | 300 | 15px, 17px | 1.20, 1.40 | Used for minor interactive elements and specific UI text, contributing to the clean, modern feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 15 | 1.2 |  |
| body-sm | 17 | 1.2 |  |
| body | 41 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "300px"
  },
  "elementGap": "17px",
  "sectionGap": "43px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button, conveying prominence through fill.

Background: Muted UI Gray (#dcdcdc), Text: Canvas Dark (#000000), Border: Muted UI Gray (#dcdcdc) with 300px radius, Padding: 12px vertical, 20px horizontal.

### Ghost Button

**Role:** Secondary action or navigation element, minimal visual weight.

Background: transparent, Text: Canvas Dark (#000000), Border: Canvas Dark (#000000), Padding: 1px vertical, 6px horizontal.

### Feature Card

**Role:** Group related content without adding visual noise.

Background: transparent, no shadow, no border, no padding, 0px radius. Relies on layout for separation.

### Text Link

**Role:** Interactive text for navigation or references.

Text: Canvas Light (#fafafa), no underline by default, visually distinct only on hover or active states (handled by interaction patterns).

## Do's

- Prioritize text content and layout over decorative elements.
- Use Canvas Dark (#000000) for all main backgrounds and Canvas Light (#fafafa) for primary text in reversed contexts.
- Maintain high contrast ratios for all text elements.
- Apply 0px radius for all general containers and cards to maintain a sharp, deliberate edge.
- Use FAVORIT font for all body text and headings in varying sizes and weights, leveraging its clean, versatile character.
- Ensure generous negative space around all content blocks, using 17px as a base element gap.
- Employ the 300px radius for all interactive buttons and tags, creating a distinctive pill shape.

## Don'ts

- Do not introduce strong accent colors; maintain the achromatic palette.
- Avoid using drop shadows or complex gradients; rely on flat surfaces and high contrast for visual hierarchy.
- Do not deviate from the specified font families; avoid generic system fonts.
- Do not add unnecessary borders or dividers; rely on spacing and typography for content separation.
- Avoid large imagery or elaborate illustrations; focus on text and minimal UI elements.
- Do not use generic button shapes; ensure all buttons adhere to the pill-shaped 300px radius.
- Avoid horizontal padding on cards; keep card content flush unless explicitly specified.

## Layout

The page maintains a full-bleed layout, taking advantage of the dark background. The hero section features large, centered headlines over a dynamic, dark motion background. Content sections flow vertically with consistent, spacious internal padding, often featuring large, centered text blocks or a more traditional left-aligned text approach within the dark canvas. There are no clear card grids on the main page, reinforcing the text-heavy, spacious feel. Navigation is minimal, typically a subtle right-aligned menu icon leading to an overlay.

## Imagery

The site primarily uses photography, often treated with a dark, moody filter and motion blur, conveying a dynamic atmosphere rather than static content. When clear, imagery appears as full-bleed background elements under text. Product imagery, if present, would likely be integrated subtly or presented with minimal adornment. Icons are minimal, represented by simple geometric shapes (e.g., a hamburger menu icon). The density is text-dominant, with imagery serving as an atmospheric backdrop.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Uses large type, dark backgrounds, and an emphasis on editorial content over flashy visuals. |
| Basic Agency | Monochrome palette, large typography, and minimalist layouts focused on high-impact text. Features dynamic background videos/imagery. |
| Work & Co | Emphasis on black and white contrasting text, generous whitespace, and a content-first approach without heavy UI elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #fafafa
background: #000000
border: #dcdcdc
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section with 'Hello. We’re Freytag Anderson' centered. Use Canvas Light (#fafafa) as text color. The font should be FAVORIT weight 400 at 41px line-height 1.00.
2. Design a supporting text block using Clarkson weight 300 at 17px line-height 1.40, color Canvas Light (#fafafa).
3. Create a secondary ghost button with the text 'Show More'. Use Canvas Dark (#000000) for border and text, 1px vertical padding, 6px horizontal padding. Font halyard-display weight 300 at 15px with letter-spacing 0.0200em.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517111010-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517111010-thumb.jpg |
