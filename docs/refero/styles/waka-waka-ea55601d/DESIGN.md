# Waka Waka — Refero Style

- Refero URL: https://styles.refero.design/style/ea55601d-e953-48b3-99db-374b39bf2f56
- Site URL: https://wakawaka.world
- ID: ea55601d-e953-48b3-99db-374b39bf2f56
- Theme: light
- Industry: design
- Created: 2026-04-30T00:35:19.346Z
- Ranks: newest: 755, popular: 1137, trending: 1113

> Gallery Wall Catalog: off-white canvas, stark black typography, and carefully placed product visuals.

## Description

Waka Waka employs a stark, editorial aesthetic, reminiscent of print. Its visual system centers on high-contrast typography against an off-white canvas, conveying information with an almost journalistic directness. The layout is disciplined and grid-bound, using generous negative space around bold type and product photography to lend an artifact-like quality to content. Color is minimal, primarily serving as a background for the content block, with deep charcoal black for all text and UI elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Parchment | #edeae4 | neutral | Page background, primary surface for content blocks |
| Ink Jot | #28282a | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Waka Sans | Helvetica Neue | 400, 500, 700 | 10px, 14px, 18px, 24px, 560px | 0.80, 0.83, 1.00, 1.20, 1.60 | The primary typeface for all content, from monumental headings to functional body text and navigation. Its heavy weights in large sizes dominate the visual field, creating a poster-like impact, while lighter weights provide clarity for smaller text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1 |  |
| body-sm | 14 | 1 |  |
| body | 18 | 1 |  |
| body-lg | 24 | 1 |  |
| heading-sm | 560 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "6-20px",
  "sectionGap": "40-54px",
  "cardPadding": "20px",
  "pageMaxWidth": "445px"
}
```

## Components

### Page Canvas

**Role:** The primary content container

A single content block centered on the page with 'Canvas Parchment' (#edeae4) background, constrained to a maximum width of 445px. There are no explicit borders or shadows, relying on the contrast with the page background for definition.

### Hero Headline

**Role:** Prominent display text

Uses Waka Sans at 560px, weight 700, color 'Ink Jot' (#28282a). Letter-spacing is -0.09em for dramatic visual effect against the 'Canvas Parchment' background.

### Navigation Link

**Role:** Site navigation

Waka Sans, 14px, weight 400, color 'Ink Jot' (#28282a). These are minimal, text-only links within the header and footer.

### Body Text

**Role:** :Standard paragraph and descriptive text

Waka Sans, 14px, weight 400, color 'Ink Jot' (#28282a) with lineHeight 1.6.

### Functional Details

**Role:** Metadata, timestamps, and smaller labels

Waka Sans, 10px, weight 400, color 'Ink Jot' (#28282a). Used for compact, informational text blocks.

## Do's

- Prioritize 'Canvas Parchment' (#edeae4) as the main background for content areas, providing a neutral, gallery-like surface.
- Use 'Ink Jot' (#28282a) for all text and UI elements to maintain high contrast and a consistent monochrome palette.
- Employ Waka Sans at 560px with weight 700 and -0.09em letter-spacing for all prominent display headlines, creating a poster-like visual impact.
- Maintain a clear page max-width of 445px for primary content blocks to create a focused, contained reading experience.
- Utilize Waka Sans at 14px, weight 400, and lineHeight 1.6 for body text, ensuring legibility within the compact layout.
- Intersperse content with liberal white space; `elementGap` should range from 6px to 20px, and `sectionGap` between 40px and 54px.
- Maintain a strict '0px' border-radius across all elements to reinforce the sharp, editorial aesthetic.

## Don'ts

- Avoid using any saturated colors beyond the strict 'Ink Jot' and 'Canvas Parchment' palette.
- Do not introduce shadows or complex gradients; the design relies on flat surfaces and stark contrast.
- Refrain from varying font families; Waka Sans is the exclusive typeface for the entire system.
- Do not break the page max-width containment; all primary content should adhere to the 445px constraint.
- Avoid decorative graphical elements; imagery should be product-focused and photography-based.
- Do not implement any border-radius greater than 0px; all corners must remain sharp.
- Do not use subtle neutrals to hint at hierarchy; rely on type size, weight, and spacing for visual differentiation.

## Layout

The page model is centered and constrained to a maximum width of 445px, creating a narrow, column-like presentation reminiscent of a printed page. The hero pattern features a monumental, centered headline 'Waka' spanning the width. Content arrangement alternates between large, impactful type elements and product photographs, often in a two-column or stacked composition within the narrow canvas. Vertical rhythm is established by distinct gaps between sections and elements, relying on negative space rather than explicit dividers. Navigation is minimal, consisting of text links in a fixed header and footer.

## Imagery

Imagery consists exclusively of product photography, primarily showcasing furniture. The treatment is stark and isolated: tightly cropped subjects against neutral, often studio-like backgrounds, with a focus on form and material. Photos are contained within layout blocks, maintaining sharp, unmasked edges. There are no lifestyle shots, illustrations, or iconography beyond simple text-based interactives; the objects themselves convey the aesthetic and brand. Images are high-contrast and often monochromatic, mirroring the color palette.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Eye on Design | Shares a stark, editorial layout with bold typography, high contrast, and minimal color. |
| The Brand Identity | Employs oversized type, a restricted color palette, and a focus on clean, grid-based content presentation. |
| Norm Architects | Features a minimalist aesthetic with neutral tones, strong focus on product display, and a quiet, sophisticated typography. |

## Custom Sections

### Motion Philosophy

The system utilizes subtle motion, primarily for interaction feedback on opacity and transform, with `ease` timing functions. Durations are generally fast to moderate (0.3s to 0.4s), ensuring responsiveness without drawing excessive attention. Transitions are sparingly used, reinforcing the static, editorial feel of the design. Long duration transitions (0.6s) suggest more significant state changes, but the overall approach prioritizes quick and direct feedback over elaborate animations.

### Agent Prompt Guide

primary action: no distinct CTA color

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509295971-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509295971-thumb.jpg |
