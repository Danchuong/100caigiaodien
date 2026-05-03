# TypeList — Refero Style

- Refero URL: https://styles.refero.design/style/76ace78c-94b7-421d-a8fd-47289328458f
- Site URL: https://typelist.upstatement.com
- ID: 76ace78c-94b7-421d-a8fd-47289328458f
- Theme: light
- Industry: design
- Created: 2026-04-30T03:46:41.950Z
- Ranks: newest: 69, popular: 1081, trending: 1069

> Chromatic interactive blocks

## Description

TypeList adopts a vibrant, playful design language built on an entirely white canvas punctuated by large, brightly colored interactive blocks. Typography is classic and understated, serving as an anchor to the dynamic color palette. The entire system feels like an interactive art exhibit, where color reveals content through large, expressive swatches rather than subtle accents.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page background, primary surface |
| Ink Black | #15181e | neutral | Primary text, headings, general UI elements and borders |
| Pure Black | #000000 | neutral | Decorative icons, button text, subtle borders |
| Textured Gray | #e3e3d5 | neutral | Interactive block background |
| Light Gray | #dcdcdc | neutral | Interactive block background |
| Soft Greenish Gray | #b9d4cd | neutral | Interactive block background |
| Regal Violet | #8d7fc8 | brand | Interactive block background |
| Sunshine Yellow | #fff731 | brand | Interactive block background |
| Sky Blue | #9dc4f2 | brand | Interactive block background |
| Electric Blue | #2772ff | brand | Interactive block background |
| Lime Green | #dffe5a | brand | Interactive block background |
| Flame Red | #f9423b | brand | Interactive block background |
| Crimson Red | #c81103 | brand | Interactive block background |
| Golden Ochre | #d39f43 | brand | Interactive block background |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Untitled Sans |  | 400, 500 | 16px, 22px, 24px | 1.00, 1.10, 1.36 | Primary UI text for body copy, headings, links, and buttons. Its clean, utilitarian nature grounds the colorful design. |
| Untitled Serif |  | 400 | 24px | 1.10 | Used for specific body text, possibly decorative or highlighting short phrases against the sans-serif dominant typography. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.36 |  |
| body-lg | 22 | 1.1 |  |
| heading | 24 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "30px",
  "sectionGap": "48px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Header navigation item, typically for informational links.

Text in Pure Black (#000000) or Ink Black (#15181e), no background, no border, and 0px radius. Minimal padding as defined by the parent layout.

### Interactive Color Block Link

**Role:** Large, full-width interactive sections that serve as primary navigation or content categories.

These blocks are the core interaction. They use one of the vivid brand colors (e.g., Regal Violet #8d7fc8, Sunshine Yellow #fff731, Sky Blue #9dc4f2, etc.) as the background. Text is Ink Black (#15181e) or Pure Black (#000000), using Untitled Sans at 24px weight 400. They have square corners (0px radius) and significant vertical padding (padding-top: 20px, padding-bottom: 20px).

## Do's

- Prioritize Canvas White (#ffffff) as the primary page background.
- Use Ink Black (#15181e) for all primary text and headings.
- Employ the vibrant brand colors (e.g., Regal Violet #8d7fc8, Sunshine Yellow #fff731) exclusively for large interactive block backgrounds.
- Maintain a consistent 0px border-radius across all interactive elements and sections.
- Use Untitled Sans for all general UI text at 16px, 22px, or 24px, with normal letterSpacing.
- Ensure interactive color blocks have at least 20px vertical padding (padding-top and padding-bottom) for comfortable interaction.

## Don'ts

- Do not introduce shadows or elevation; the system relies on flat planes of color.
- Avoid using the vibrant brand colors for small accents or text; reserve them for interactive block backgrounds.
- Do not use rounded corners on any elements; all shapes should be clean and rectilinear.
- Do not use gradients; the color palette is intentionally flat and solid.
- Avoid using more than one font family in very close proximity; Untitled Sans and Untitled Serif have distinct functional roles.
- Do not clutter the layout; maintain generous whitespace around header elements and between main content blocks.

## Layout

The page primarily uses a full-bleed layout, allowing color blocks to extend edge-to-edge. The hero features a centered headline against the white canvas. Content sections are composed of alternating large, full-width color blocks, each representing a distinct content category, creating a strong vertical rhythm. Navigation is minimal, limited to a header bar with sparse, right-aligned text links. The information density is low, emphasizing visual impact and interaction over extensive text.

## Imagery

The site's imagery strategy is pure UI, focusing on large, solid blocks of color rather than photography or complex illustrations. The 'rainbow' motif from the screenshot suggests a visual system built around contrasting, bold color fields. Icons are minimal, likely mono-color and outline-based, serving a functional rather than decorative role.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Minimalistic UI with stark typography and a focus on content blocks, albeit with less vibrant color. |
| Fonts In Use | Directory-style site with clear typography, using distinct color treatments to differentiate content, but with less emphasis on full-bleed blocks. |
| Italic.co | Heavy reliance on large, interactive, unbordered content blocks that act as visual navigation. |
| Eye Magazine | Playful, design-focused site with strong typographic elements and a willingness to use bold color for content distinction. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #15181e
background: #ffffff
border: #15181e
accent: #8d7fc8
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header: white background (#ffffff), text 'TypeList by Upstatement' in Untitled Sans, 24px, weight 400, Ink Black (#15181e). On the right, 'INFO' and a decorative icon in Pure Black (#000000), Untitled Sans 16px weight 400. All elements have 0px radius.
2. Design an interactive content block for 'TAROT': background Regal Violet (#8d7fc8). Text 'TAROT' in Pure Black (#000000), Untitled Sans 24px weight 400. Ensure 0px radius and at least 20px top/bottom padding.
3. Create an interactive content block for 'TAKEOUT BAGS': background Sunshine Yellow (#fff731). Text 'TAKEOUT BAGS' in Pure Black (#000000), Untitled Sans 24px weight 400. Ensure 0px radius and at least 20px top/bottom padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520787808-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520787808-thumb.jpg |
