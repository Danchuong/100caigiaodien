# B/D® JAMS — Refero Style

- Refero URL: https://styles.refero.design/style/f53d4664-017b-46d1-9336-ec555dc9022e
- Site URL: https://jams.basicagency.com
- ID: f53d4664-017b-46d1-9336-ec555dc9022e
- Theme: light
- Industry: media
- Created: 2026-04-30T01:28:04.057Z
- Ranks: newest: 594, popular: 895, trending: 832

> Editorial White Canvas

## Description

The B/D® JAMS design system presents a clean, editorial aesthetic reminiscent of a digital zine, prioritizing spaciousness and direct typography over decorative elements. Its visual language relies on a monochrome palette of stark black text and crisp backgrounds, occasionally softened by subtle gray borders. Layouts are deliberately sparse, framing content with generous whitespace, and interactions are signaled through direct text changes rather than elaborate animations or vivid highlights. Components are minimalist, focusing on function with zero radii and transparent backgrounds.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Ice | #f1f1f1 | neutral | Primary page background, expansive surfaces |
| Ink Black | #0e0e0e | neutral | Primary text, strong headings, button borders, and essential UI strokes. Establishes a bold, high-contrast presence |
| Border Fog | #e5e7eb | neutral | Subtle borders and dividers for nuanced separation |
| True White | #ffffff | neutral | Secondary text in specific contexts, subtle border accents, and for maximum contrast elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SctoGroteskA | Inter | 300, 700 | 16px, 24px, 48px | 1.00, 1.13, 1.17 | All textual content, from navigation links and body text to prominent headings. The varied weights with tight letter-spacing contribute to its editorial, almost typewritten feel, emphasizing clarity and precision over decorative flair. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.17 | -0.48 |
| subheading | 24 | 1.13 | -0.72 |
| heading | 48 | 1 | -1.92 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "30px",
  "sectionGap": "80px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Interactive element for navigation and primary actions.

Background transparent (rgba(0, 0, 0, 0)), text color Ink Black (#0e0e0e), with no padding or border by default. Focus states are indicated by border.

### Information Card (minimal)

**Role:** Container for content.

Background transparent (rgba(0, 0, 0, 0)), no border, no shadow, and zero padding. Achieves separation primarily through generous vertical spacing.

## Do's

- Prioritize Canvas Ice (#f1f1f1) for all background surfaces to maintain a clean, expansive feel.
- Use Ink Black (#0e0e0e) for primary text and borders to ensure strong contrast and visual hierarchy.
- Apply SctoGroteskA (or Inter) with letter-spacing -0.04em for headings at 48px, and -0.03em for 16px and 24px text to consistently deliver the concise, editorial aesthetic.
- Maintain a zero border-radius for all interactive elements and containers to preserve the sharp, angular aesthetic.
- Utilize 80px for vertical spacing between major sections, and 30px for horizontal and vertical spacing within content blocks to ensure generous whitespace.
- Implement Ghost Navigation Buttons with a transparent background and Ink Black (#0e0e0e) text, only showing a border on hover/focus using Ink Black (#0e0e0e).

## Don'ts

- Do not use highly saturated colors for main UI elements; chromatic colors are not part of the brand's core palette.
- Avoid using box-shadows or elevated elements; the design emphasizes a flat, two-dimensional aesthetic.
- Do not introduce decorative borders or excessive padding on cards; they should remain minimalist and transparent.
- Do not use rounded corners on any UI element; all corners should be sharp and angular.
- Avoid dense information blocks; instead, use ample whitespace and clear typographic hierarchy for content organization.
- Do not use generic system fonts; always prioritize SctoGroteskA (or Inter) to maintain the brand's unique typographic voice.

## Layout

The page maintains a full-bleed, canvas-like aesthetic, allowing background imagery to extend edge-to-edge. Content appears to be horizontally centered within a broad but undefined maximum width. The hero pattern features minimal navigation text elements positioned prominently at the top, overlaying the background. Sections are separated by generous vertical spacing, typically 80px, maintaining significant breathing room between content blocks. The primary content arrangement is a simple, stacked typographic hierarchy creating an editorial, almost printed page feel with no complex grids or alternating visual patterns.

## Imagery

The site's imagery primarily consists of full-bleed, raw photographic or abstract visuals acting as background elements, specifically a weathered-looking sky. These images are treated without specific masking or prominent borders, integrating seamlessly into the minimalist design, acting more as atmospheric textures than focal points. There are no obvious icons or complex illustrations, preserving a text-dominant and stark visual environment.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Shares a stark, minimalist visual style with a heavy reliance on monochrome typography and visible borders for UI elements. |
| Basic Type Foundry | Features a strong, editorial typographic voice, high contrast, and a sparse, content-focused layout with minimal decorative elements. |
| The New York Times (digital archives) | Employs an editorial grid, high typographic rigor, and a focus on clean, legible text without excessive visual distraction, often using large amounts of white space. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0e0e0e
background: #f1f1f1
border: #e5e7eb
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a top navigation bar: Canvas Ice background (#f1f1f1). Left-aligned text 'B/D® JAMS' at 16px SctoGroteskA weight 700, color Ink Black (#0e0e0e), letter-spacing -0.48px. Right-aligned 'Notes' link at 16px SctoGroteskA weight 700, color Ink Black (#0e0e0e), letter-spacing -0.48px. No padding, no border, no radius.
2. Create a heading section: Canvas Ice background (#f1f1f1). Centered text 'Press Option+1 for screen-reader mode, Option+0 to cancel' at 48px SctoGroteskA weight 700, color Ink Black (#0e0e0e), letter-spacing -1.92px. Padding 80px top and bottom.
3. Create a Ghost Grid Button: Transparent background (rgba(0,0,0,0)), text 'Grid' at 16px SctoGroteskA weight 700, color Ink Black (#0e0e0e), letter-spacing -0.48px. No padding, border, or radius. Should respond to hover/focus by showing a 1px solid Ink Black (#0e0e0e) border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512467827-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512467827-thumb.jpg |
