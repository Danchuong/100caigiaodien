# Cargo — Refero Style

- Refero URL: https://styles.refero.design/style/27f128c6-d381-4915-a6c7-078a54bc6fab
- Site URL: https://santijaramillo.com
- ID: 27f128c6-d381-4915-a6c7-078a54bc6fab
- Theme: light
- Industry: other
- Created: 2026-04-30T03:02:55.225Z
- Ranks: newest: 242, popular: 1114, trending: 1080

> Direct text, minimalist blue accent

## Description

The design system of santijaramillo.com presents a straightforward, minimalist interface, primarily leveraging default browser styles with carefully selected overrides. Its visual identity is defined by a utilitarian palette of strong achromatic colors and a single vivid blue for active elements and links. Typography relies on system fonts, prioritizing direct communication over decorative flourish. Components are sparse, focusing on direct textual information with minimal visual ornamentation, creating an atmosphere of functional clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, default borders, ensuring high contrast against light surfaces |
| Slate Gray | #999999 | neutral | Muted secondary text for descriptive or less critical information |
| Arctic White | #ffffff | neutral | Page background, primary surface for content areas |
| Electric Blue | #0055ff | brand | Interactive text links, actionable elements, distinguishing primary brand actions through chromatic contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| -apple-system | system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol' | 400 | 18px | 1.20, 1.30, 2.00 | Primary UI font for all textual content, prioritizing system legibility and neutrality across various operating systems. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Primary Text Block

**Role:** Standard body text.

Displayed in Midnight Ink (#000000) at 18px with a line-height of 1.3 relative to font size and a slight positive letter-spacing of 0.017em. This is the default text treatment for main content.

### Muted Text Block

**Role:** Secondary, less prominent body text.

Displayed in Slate Gray (#999999) at 18px with a line-height of 1.3 relative to font size and a slight positive letter-spacing of 0.017em. Used for disclaimers or supplementary information.

### Action Link

**Role:** Hyperlinks for navigation or interaction.

Rendered in Electric Blue (#0055ff) at 18px, with a line-height of 1.3 relative to font size and a letter-spacing of 0.017em. Appears as a text-only link without additional styling.

## Do's

- Use Electric Blue (#0055ff) exclusively for interactive elements and links, keeping it as the sole chromatic element.
- Prioritize '-apple-system' (or system-ui fallback) at 18px weight 400 for all text to maintain system-native legibility.
- Apply a general letter-spacing of 0.017em to all text elements for consistent visual density.
- Maintain a stark contrast between text (Midnight Ink #000000, Slate Gray #999999) and the Arctic White (#ffffff) background.
- Use 8px for internal element spacing and 15px for padding around content blocks.
- Ensure all components have default 0px border-radius, reflecting a sharp, direct aesthetic.

## Don'ts

- Do not introduce additional accent colors; Electric Blue (#0055ff) is the only allowed brand accent.
- Avoid decorative heavy typography; stick to the single font family and its specified weight.
- Do not use elevation or shadows; rely on clear content separation and typography for hierarchy.
- Do not vary border-radius; all elements should maintain sharp corners.
- Do not use gradients or complex background fills; surfaces should remain solid and flat.
- Avoid using icons or imagery unless they are purely functional and unstyled; the emphasis is on text.

## Layout

The page employs a simple, centered block layout for content. There is no explicit max-width for the main content block, allowing it to adapt to the viewport width. The hero pattern is a direct, centered text block. Section rhythm is defined by vertical spacing between discrete text paragraphs. All content is arranged in a single-column, centered stack without complex grid structures. The layout is sparse, with ample whitespace surrounding textual elements. There is no visible navigation bar.

## Imagery

No imagery is used. The visual language is entirely text-based, relying on typography and color to convey information and hierarchy. Graphics are limited to default browser rendering, making content the sole visual focus.

## Similar Brands

| Business | Why |
| --- | --- |
| txt.fyi | Extremely minimal, text-focused content with default browser styling and no custom visual elements. |
| manual.ink | Simple, functional aesthetic leveraging system fonts and basic HTML elements for content delivery. |
| Notion (minimal page) | Emphasis on content block, text hierarchy, and subtle linking without heavy branding or complex UI components. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #0055ff
primary action: #0055ff (outlined action border)

Example Component Prompts:

1. Create a descriptive text block: text 'This is a sample text block.' in Midnight Ink (#000000) at 18px -apple-system weight 400, line-height 1.3, letter-spacing 0.017em. Use 15px horizontal padding and 8px vertical padding.

2. Create a muted information paragraph: text 'Secondary information with muted emphasis.' in Slate Gray (#999999) at 18px -apple-system weight 400, line-height 1.3, letter-spacing 0.017em.

3. Create a functional text link: text 'Click here to proceed' in Electric Blue (#0055ff) at 18px -apple-system weight 400, line-height 1.3, letter-spacing 0.017em. This link should have no background or border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518148802-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518148802-thumb.jpg |
