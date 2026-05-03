# Matter of Fact — Refero Style

- Refero URL: https://styles.refero.design/style/d7dcd499-8eeb-4dbb-8c52-9d688e637783
- Site URL: https://matteroffact.fr
- ID: d7dcd499-8eeb-4dbb-8c52-9d688e637783
- Theme: light
- Industry: design
- Created: 2026-04-30T02:38:45.736Z
- Ranks: newest: 329, popular: 1119, trending: 1115

> Monochrome typographic canvas

## Description

Matter of Fact operates on a stark, high-contrast visual system: pure black text on a clean white canvas. Typography, primarily large and commanding, is the dominant visual element, with minimal use of color or complex components. The design maintains an austere, type-driven aesthetic, emphasizing direct communication and clarity through its monochrome palette.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, primary surface for all content |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FreeSans | Arial | 400 | 23px, 36px, 202px | 1.00, 1.20 | All textual content, from primary navigation to very large display headlines. Its mono-weight adherence to 400 emphasizes consistency and directness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 23 | 1.2 | 0 |
| subheading | 36 | 1.2 | 0 |
| display | 202 | 1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "6px",
  "sectionGap": "84px",
  "cardPadding": "18px",
  "pageMaxWidth": "900px"
}
```

## Components

### Minimal Navigation Link

**Role:** Interactive text link within navigation

Text link using FreeSans, weight 400, color Midnight Ink (#000000). Padding of 6px applied to individual items and 18px on the right and bottom for broader clickable areas.

### Headline Display Text

**Role:** Dominant page headlines

Large text using FreeSans, weight 400, color Midnight Ink (#000000), at 202px size with 1.0 line height for impactful, dense typography.

## Do's

- Prioritize text as the primary visual element; minimize other decorative components.
- Maintain a strict achromatic color palette using only Canvas White (#ffffff) for backgrounds and Midnight Ink (#000000) for foreground elements.
- Use FreeSans weight 400 for all typography, ensuring a consistent and direct tone.
- Apply 84px vertical spacing between major page sections to create clear visual breaks.
- Ensure all interactive elements are defined by Midnight Ink (#000000) borders or text, with no background fills.

## Don'ts

- Do not introduce any chromatic colors; the palette is strictly monochrome.
- Avoid decorative images or illustrations that would distract from the typography.
- Do not use multiple font weights or families; FreeSans 400 is the only typeface.
- Refrain from using shadows or gradients; rely on contrast and typography for visual hierarchy.
- Do not break the 900px max-width constraint for main content areas.

## Layout

The page model is contained, with a max-width of 900px and content generally centered. The hero pattern is a massive, attention-grabbing centered headline over a pure white background. Sections maintain a consistent vertical rhythm with 84px spacing. Content is arranged in simple, centered stacks, with no apparent grid usage for features or cards. The navigation is a top bar, minimal and text-based, likely sticky given the interactive elements.

## Imagery

The site uses no imagery or embedded graphics, focusing entirely on a pure typographic and monochrome UI. The visual language is defined by the stark absence of visuals, making text itself the primary graphic element.

## Similar Brands

| Business | Why |
| --- | --- |
| Savvy Studio | Emphasizes large, stark typography on a monochromatic background with minimal UI elements. |
| Anagram Paris | Uses a clean white canvas, high-contrast black text, and a strong typographic voice as its core aesthetic. |
| Bureau for Visual Affairs | Relies on a monochrome palette and large, well-structured typography to convey information rather than decorative imagery. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a page with a main headline: white background. Headline 'Matter of Fact' in FreeSans weight 400, 202px, line height 1.0, color #000000, centered on the page.
2. Create a navigation bar: white background, max-width 900px, centered. Include a text link 'Fact' in FreeSans weight 400, 23px, color #000000, with 6px padding.
3. Create a secondary content section: white background, separated from the previous section by 84px of vertical space. Include a subheading 'Matter of Tab' in FreeSans weight 400, 36px, line height 1.2, color #000000, left-aligned.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516711673-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516711673-thumb.jpg |
