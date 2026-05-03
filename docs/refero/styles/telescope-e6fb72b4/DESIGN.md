# Telescope — Refero Style

- Refero URL: https://styles.refero.design/style/e6fb72b4-877d-46ab-8f94-590b971d4dc1
- Site URL: https://telescope.fyi
- ID: e6fb72b4-877d-46ab-8f94-590b971d4dc1
- Theme: light
- Industry: other
- Created: 2026-04-30T00:30:59.944Z
- Ranks: newest: 775, popular: 901, trending: 833

> Warm parchment, scattered Polaroids

## Description

Telescope embraces a warm, organic minimalism with off-white canvases and rich, dark typography. The design feels grounded through a single vibrant green accent used sparingly for active states and highlights. A sense of relaxed, curated discovery is conveyed by the loose typographic arrangements and the overall spaciousness. Imagery, when present, is small, floating, and acts as visual anchors in a predominantly airy layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Soft Vanilla | #f4f3f0 | neutral | Page backgrounds, card surfaces, UI canvases — a foundational warm off-white |
| Deep Graphite | #1a1915 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Spring Bud | #e3f794 | brand | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| White Canvas | #ffffff | neutral | Secondary surface background, elevated UI elements |
| Ash Gray | #82868e | neutral | Muted body text, secondary icons, subtle borders for informational elements |
| Pure Black | #000000 | neutral | Decorative SVG fills, illustrative elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Beausite | system-ui | 400 | 19px, 23px, 55px, 57px | 1.05, 1.15 | Primary headings and body text — conveys a premium, relaxed editorial style with its wide tracking for large sizes, tightening for smaller text. |
| DM Mono | Menlo | 400 | 12px | 1.10 | Utility text, badges, and smaller labels — a clear, spaced-out monospace for functional elements. |
| CM Geom | system-ui | 400 | 250px | 1.00 | Display headings — reserved for high-impact, oversized titles; its negative letter-spacing creates a sense of gravitas and modernity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.1 | 0.36 |
| body | 19 | 1.15 | -0.38 |
| subheading | 23 | 1.15 | -0.39 |
| heading | 55 | 1.05 | -0.38 |
| display | 250 | 1 | -0.5 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "0px",
    "default": "2px"
  },
  "elementGap": "10px",
  "sectionGap": "135px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Secondary action button

Text-only buttons using Deep Graphite (#1a1915) for text and border, with 0px radius and minimal padding.

### Accent Filled Button

**Role:** Primary action button

Filled button with Spring Bud (#e3f794) background and Deep Graphite (#1a1915) text, using 0px radius.

### Information Badge

**Role:** Informational tag

Text-only badges with Deep Graphite (#1a1915) text on a transparent background, 0px radius.

### Floating Content Card

**Role:** Visual content container

Image-focused cards with 0px radius borders, no background, and no shadow, acting as unconstrained visual elements.

## Do's

- Prioritize Deep Graphite (#1a1915) for all primary text and headers to maintain a grounded aesthetic.
- Use Soft Vanilla (#f4f3f0) as the default background for most page sections and card surfaces.
- Apply Spring Bud (#e3f794) sparingly for action indicators, accent fills, and highlights to provide a focused point of interest.
- Maintain 0px border radius for all buttons and content cards, promoting a sharp, clean edge.
- Utilize a 135px vertical section gap to ensure abundant breathing room between distinct content blocks.
- Set the letter-spacing for display typography (250px CM Geom) to -0.0020em to achieve a refined, tight fit.
- Employ DM Mono at 12px with 0.0300em letter spacing for small functional text like captions and badges.

## Don'ts

- Avoid using harsh white backgrounds directly adjacent to type; prefer the softer Soft Vanilla (#f4f3f0).
- Do not introduce additional saturated colors; the Spring Bud (#e3f794) is the singular chromatic accent.
- Refrain from using shadows or elevation on cards; content should feel flat and unburdened.
- Do not deviate from 0px border radius for primary UI elements like buttons and cards, as rounded corners are not part of this visual system.
- Avoid dense, stacked content; prioritize whitespace and generous element gaps (10px minimum).
- Do not use overly bold or heavy weights for headings; maintain the Beausite 400 weight for a refined feel.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Similar focus on content curation, off-white canvas, and minimal UI with emphasis on text and scattered visual content. |
| Read.cv | Uses subtle neutral palettes and emphasizes typography and content through a spacious and uncluttered layout. |
| Letterboxd | Community-driven content platform with subtle branding, prioritizing user-generated content and personal expression over heavy UI elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1a1915
background: #f4f3f0
border: #1a1915 (for interactive elements), #82868e (for muted/informational borders)
accent: #e3f794
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Primary Headline: 'Real recommendations by real people' using Beausite 400 at 57px, line height 1.05 and letter-spacing -0.96px, color Deep Graphite (#1a1915), centered. Ensure ample space around it using sectionGap.
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
3. Create a Subtext line: 'Currently in Beta' using DM Mono 400 at 12px, line height 1.1, letter-spacing 0.36px, color Ash Gray (#82868e).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509035495-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509035495-thumb.jpg |
