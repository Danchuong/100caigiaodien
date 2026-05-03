# Wispr Flow — Refero Style

- Refero URL: https://styles.refero.design/style/ac53825c-1e06-4ae0-8489-cace5c5e0339
- Site URL: https://wisprflow.ai
- ID: ac53825c-1e06-4ae0-8489-cace5c5e0339
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:35:20.943Z
- Ranks: newest: 754, popular: 259, trending: 181

> Warm parchment sophistication

## Description

Wispr Flow embraces a serene, almost academic aesthetic, blending a warm, muted palette with classic serif typography for large displays and a modern sans-serif for functional text. The design is characterized by generous spacing and soft, rounded elements that create a friendly and approachable feel. Dark, rich greens and deep grays are used to anchor sections, while a soft lavender provides a playful, yet restrained, accent for interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Parchment | #ffffeb | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default borders — creating a soft, warm canvas |
| Ink | #1a1a1a | neutral | Primary text, dark card backgrounds, hero backgrounds, primary borders |
| Forest Canopy | #034f46 | brand | Section backgrounds, prominent card backgrounds, active button fills |
| Pale Lavender | #f0d7ff | accent | Primary action button backgrounds, accent underlines for headings |
| Stone | #e4e4d0 | neutral | Subtle border colors, secondary navigation backgrounds |
| Charcoal Text | #222222 | neutral | Secondary text in navigation and neutral buttons |
| Muted Ash | #8a8a80 | neutral | Headline text — a softer black for large, elegant typography |
| White | #ffffff | neutral | Text on dark backgrounds, icon strokes, active badge borders |
| Sunburst | #ffa946 | accent | Accent badge backgrounds, decorative fills in illustrations |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Figtree | system-ui | 400, 500, 600, 700 | 14px, 16px, 20px, 22px, 24px, 32px | 0.95, 1.00, 1.30 | Body text, UI elements, navigation, buttons, and detailed content — its clean, modern lines provide functional clarity. |
| EB Garamond | serif | 400 | 32px, 48px, 64px, 120px | 0.85, 0.95, 1.10, 1.30 | Display headings and prominent headlines — chosen for its classic, elegant character that introduces a sophisticated, editorial feel. |
| Apple Color Emoji |  | 400 | 72px | 1.3 | Apple Color Emoji — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.3 |  |
| body | 16 | 1.3 |  |
| subheading | 20 | 1.3 |  |
| subheading-lg | 22 | 1.3 |  |
| heading-sm | 24 | 1.3 |  |
| heading | 32 | 1.3 | -0.48 |
| heading-lg | 48 | 0.95 | -0.48 |
| display | 64 | 0.85 | -0.48 |
| display-xl | 120 | 0.85 | -0.48 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "32px",
    "badges": "992px",
    "global": "1600px",
    "images": "40px",
    "inputs": "14px",
    "buttons": "12px"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Interactive element

Buttons with Pale Lavender (#f0d7ff) background and Ink (#1a1a1a) text, rounded corners at 12px. Used for primary calls to action.

### Outline Ghost Button

**Role:** Interactive element

Transparent background with Ink (#222222) border and text, 0px radius. Used for secondary actions that don't need strong emphasis.

### Branded Action Button

**Role:** Interactive element

Forest Canopy (#034f46) background with Parchment (#ffffeb) text, 32px radius. Reserved for prominent, section-specific actions.

### Soft Card

**Role:** Content container

Parchment (#ffffeb) background, 32px padding, 32px border radius. Used for general content grouping on the light canvas.

### Dark Content Card

**Role:** Content container

Ink (#1a1a1a) background, 70px top-padding, 55px horizontal padding, 40px border radius. Used for featured content and sections on dark backgrounds.

### Subtle Badge

**Role:** Categorization/status

Transparent background with Ink (#1a1a1a) text and 992px border radius, 11px vertical and 16px horizontal padding. For discrete labeling.

### Branded Badge

**Role:** Categorization/status

Forest Canopy (#034f46) background with White (#ffffff) text, 1000px border radius, 8px vertical and 16px horizontal padding. For prominent categorization.

## Do's

- Use Parchment (#ffffeb) as the dominant background color for light sections and Ink (#1a1a1a) for dark sections to maintain visual rhythm.
- Apply EB Garamond for all display and large body headings to convey an academic, sophisticated tone, incorporating its specific letter-spacing values.
- Utilize Pale Lavender (#f0d7ff) exclusively for primary call-to-action buttons to ensure consistent highlight for interactive elements.
- Apply a 12px border-radius to all buttons and a 32px border-radius to cards, creating a consistent soft-edged aesthetic.
- Maintain a comfortable density with generous spacing: 64px for section gaps, 32px for card padding, and an 8px base unit for element gaps.
- Offset large typeface headlines with a subtle underline using Pale Lavender (#f0d7ff) to draw attention without excessive weight.

## Don'ts

- Avoid using harsh, bright whites or pure blacks that would disrupt the soft, muted color palette.
- Do not deviate from the specified border-radii; sharp corners will undermine the friendly, approachable aesthetic.
- Refrain from heavy drop shadows or excessive elevation, as the design system prioritizes a flat, surface-level presentation.
- Do not introduce additional font families; Figtree and EB Garamond provide the necessary range for both functional and expressive text.
- Avoid overusing saturated colors; limit Sunburst (#ffa946) and Forest Canopy (#034f46) to functional accents and key sections.
- Do not use generic button styles; ensure all interactive elements conform to the Primary, Outline Ghost, or Branded Action Button variants.

## Similar Brands

| Business | Why |
| --- | --- |
| Grammarly | Focuses on text refinement, uses a clean, bright aesthetic with a single accent color for primary actions. |
| Otter.ai | AI-powered transcription service with a professional yet accessible visual style, combining light backgrounds with functional accents. |
| Readwise | Knowledge management tool with a focus on readability and a serene, academic-leaning design with understated colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1a1a1a
background: #ffffeb
border: #1a1a1a
accent: #f0d7ff
primary action: #f0d7ff (filled action)

3-5 Example Component Prompts:
1. Create a Primary Action Button: #f0d7ff background, #1a1a1a text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a Dark Content Card: Ink (#1a1a1a) background, 40px border radius, 70px top padding. White (#ffffff) text at 22px Figtree weight 400 for subheadings and 16px for body. Include a white icon using a White (#ffffff) stroke if possible.
3. Implement a Branded Action Button: Forest Canopy (#034f46) background, White (#ffffff) text at 16px Figtree weight 400, 32px radius and 32px padding overall.
4. Create a Section Header: EB Garamond at 64px, Muted Ash (#8a8a80), letter-spacing -0.07em, with a Pale Lavender (#f0d7ff) underline for emphasis.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509293603-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509293603-thumb.jpg |
