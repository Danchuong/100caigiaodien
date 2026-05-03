# Doug–Alves — Refero Style

- Refero URL: https://styles.refero.design/style/24c54bfb-959d-4ca3-b274-e76ba823f3c0
- Site URL: https://dougalves.work
- ID: 24c54bfb-959d-4ca3-b274-e76ba823f3c0
- Theme: light
- Industry: design
- Created: 2026-04-30T03:54:44.268Z
- Ranks: newest: 31, popular: 1016, trending: 940

> Type-driven architectural blueprint

## Description

Doug–Alves presents a stark, high-contrast digital portfolio. Its design language is driven by highly structured, compact typography that carves out information on a dark plane, occasionally giving way to white canvases. The interaction design emphasizes functional clarity over ornamental flourishes, using subtle transitions and strong typographic scale to create visual rhythm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #282828 | neutral | Primary text, core UI elements, canvas background for information sections |
| Canvas | #ffffff | neutral | Main page background, content cards, and occasional text against dark backgrounds |
| Deep Space | #000000 | neutral | Most prominent background for primary text, subtle borders, and fills for certain icons |
| Charcoal | #333333 | neutral | Secondary text, subheadings, and borders within content areas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| wtqc | Arial, sans-serif | 300, 400 | 12px, 28px, 72px, 197px | 1.00, 1.04, 1.29, 1.33 | Display headlines and subheadings. The extreme letter-spacing and varied weights create a distinctive, impactful and architectural feel, especially the thin 300 weight for large headings. |
| Inter | Helvetica Neue, Arial, sans-serif | 400 | 18px | 0.89, 2.00 | Primary body text, used for detailed descriptions and longer content blocks. Its neutral tone supports the minimal aesthetic. |
| -apple-system | Arial, sans-serif | 400 | 16px | 1.00 | Utility text, labels, and smaller navigational elements. Provides system-level readability. |
| Roboto | Arial, sans-serif | 400 | 12px | 1.33 | Smallest supporting text, captions, and fine print. Used sparingly for compact information. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.33 | -0.003 |
| body | 18 | 2 | 0 |
| subheading | 28 | 1.04 | -0.014 |
| heading | 72 | 1.29 | -0.021 |
| display | 197 | 1 | -0.033 |

## Spacing & Shape

```json
{
  "radius": {
    "other": "20px"
  },
  "elementGap": "24px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Information Card Group

**Role:** Container for related text and links, often appearing in horizontal grids.

Transparent background, 0px border radius, no box shadow. Content relies on strong typography and layout for separation. Text uses Ink (#282828) or Charcoal (#333333).

### Text Link

**Role:** Interactive text elements.

wtqc font family, various sizes and weights. Text color is Ink (#282828) or Canvas (#ffffff) depending on background. Underlined on hover.

### Header Title

**Role:** Prominent page titles and section headers.

wtqc font family, weight 300 or 400. Sizes range from 28px to 197px with significant negative letter-spacing for a modern, architectural feel. Color is Ink (#282828) or Canvas (#ffffff).

## Do's

- Prioritize wtqc font family for all primary headings, leveraging its strong letter-spacing and weight variations for visual impact.
- Maintain a strict color palette of Ink (#282828) for most text and dark backgrounds, and Canvas (#ffffff) for light canvases and contrasting text.
- Use 0px border-radius for informational cards and sections, allowing typography and internal spacing to define boundaries.
- Apply precise letter-spacing values to wtqc typography at all sizes, especially for large headings, to preserve its distinctive crispness.
- Employ the compact Inter font for body text to maintain density and readability within content blocks.

## Don'ts

- Avoid decorative gradients or vivid colors; the system relies on high contrast and typographic hierarchy.
- Do not introduce box-shadows on cards or standard interface elements; maintain a flat, architectural surface aesthetic.
- Refrain from using common rounded button styles; interactive elements are primarily text-based or minimal-border outlines.
- Do not deviate from the defined letter-spacing values for wtqc; this is a signature characteristic of the branding.
- Avoid excessive whitespace; the design is compact, leveraging density to present information efficiently.

## Layout

The page structure balances full-bleed dark sections with contained, maximal-width light sections. The initial hero pattern features a monumental, centered headline against a dark background. Content sections flow with a consistent vertical rhythm, lacking overt visual dividers between logically grouped information blocks. Content arrangement often appears in a grid-like or tabular structure, particularly for biographical and experience details. There is no rigid max-width for the entire page; some elements stretch edge-to-edge while others are implicitly contained by text width. Navigation is minimal and integrated into the footer-like areas, with links existing as part of information groups rather than a distinct, persistent header.

## Imagery

This design system primarily relies on crisp, functional UI elements rather than prominent imagery. When visuals are present, they are either abstract and minimal (like the image of a binder with text) or highly focused product-like shots. Imagery serves an explanatory or showcase role, not decorative atmosphere. Photography is high-key, product-focused, and tightly cropped. Icons are not explicitly defined in the data but can be inferred as minimal and functional, likely monochromatic to match the system's overall restraint. The density is text-dominant with visuals supporting the content, not dictating the layout.

## Similar Brands

| Business | Why |
| --- | --- |
| Huge Inc. | Employs high-contrast typography, a monochromatic palette, and a focus on clean, architectural layouts. |
| Pentagram | Showcases portfolio work with a strong emphasis on typographic details, often with minimal imagery and high contrast. |
| Kikk.be (design conference) | Uses large, impactful typography, structured content blocks, and a dark/light alternating background for rhythm. |
| Build in Public | Minimalist portfolio style with a strong focus on text hierarchy, precise spacing, and a limited color palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #282828
background: #ffffff
border: #282828
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: 'DECONSTRUCT' at 197px wtqc weight 300, color Canvas (#ffffff), letter-spacing -0.033em, centered on a Deep Space (#000000) background.
2. Create an information card group: Canvas (#ffffff) background, with three columns. Each column contains a heading 'Portfolio 2026' at 28px wtqc weight 400, color Ink (#282828), letter-spacing -0.014em. Below each heading, include body text 'Doug Alves' at 18px Inter weight 400, color Ink (#282828), line-height 2.
3. Create a navigational link: 'Instagram' text at 12px wtqc weight 400, color Ink (#282828), letter-spacing -0.003em, with a 1px bottom border of Ink (#282828) on hover.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521265424-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521265424-thumb.jpg |
