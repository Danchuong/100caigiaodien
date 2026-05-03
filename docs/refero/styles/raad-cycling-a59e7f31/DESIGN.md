# Raad Cycling — Refero Style

- Refero URL: https://styles.refero.design/style/a59e7f31-1fca-46c1-a6b0-8d1294b33a7c
- Site URL: https://www.raad.cc
- ID: a59e7f31-1fca-46c1-a6b0-8d1294b33a7c
- Theme: dark
- Industry: ecommerce
- Created: 2026-04-30T03:01:38.694Z
- Ranks: newest: 246, popular: 1049, trending: 1024

> Monochromatic Performance Canvas

## Description

Raad Cycling embodies a stark, high-contrast aesthetic where pure black and crisp white define the visual landscape. Product imagery takes center stage, punctuated by minimal UI elements that recede until interaction. Typography is assertive yet restrained, utilizing a distinct, widened sans-serif for impact and readability. The overall impression is one of confident, unornamented directness, mirroring the functional ambition of performance cycling gear.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Arctic White | #ffffff | neutral | Surface backgrounds, body text (on dark backgrounds), ghost button text and borders, interactive highlights |
| Ash Gray | #333333 | neutral | Subtle borders for less prominent elements, disabled states |
| Deep Gray | #181818 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Muted Stone | #666666 | neutral | Secondary text, less prominent borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | Arial | 400 | 10px | 1.20 | Small functional text like captions, utility links, and system messages — designed for legibility at minimal sizes. |
| wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 | Montserrat | 400 | 12px, 13px, 16px, 18px, 50px, 54px | 1.00, 1.20, 1.40, 2.50 | Primary brand typeface for headings, body text, navigation, and buttons. Its wide letter-spacing at all sizes gives it a distinct, technical feel, emphasizing clarity over density. It is the visual voice of the brand. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.2 | 0 |
| heading | 18 | 1.4 | 1.8 |
| display-sm | 50 | 1 | 5 |
| display | 54 | 1 | 5.4 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "100px",
    "default": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "120px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Primary interactive element.

Transparent background with Arctic White text and 1px borders. No border-radius. Padding of 6px vertical and 7px horizontal, using the brand's primary typeface. Hover state maintains white borders and text.

### Main Navigation Link

**Role:** Top-level navigation items.

Arctic White text on Midnight Ink background, using the brand's primary typeface at 12px with 0.10em letter-spacing. Minimal padding (5px horizontal) and no distinct background or border.

### Product Category Link

**Role:** Product discovery links.

Arctic White text on transparent background, bordered by Deep Gray. Uses the brand's primary typeface. No border-radius, with padding of 6px vertical and 7px horizontal.

### Body Text Block

**Role:** Informational paragraphs.

Arctic White text on Midnight Ink backgrounds. Uses the brand's primary typeface at 13px, with a line height of 1.4 and 0.10em letter-spacing. Content is left-aligned within defined content areas.

### Footer Link

**Role:** Secondary navigation and legal links.

Muted Stone text on Midnight Ink background. Rendered in Arial at 10px, with normal letter-spacing, providing clear but understated informational cues.

## Do's

- Prioritize a strict achromatic palette using only Midnight Ink and Arctic White for backgrounds and primary text to maintain visual impact.
- Use wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 with its inherent 0.10em letter spacing for all headlines, body text, and navigation to establish a technical, confident tone.
- Ensure all interactive elements and links have a 1px border in either Arctic White or Deep Gray, with no border-radius for a sharp, unadorned aesthetic.
- Structure sections with generous vertical spacing (120px between major blocks) to create breathing room around prominent product imagery.
- For all primary interactive elements, apply padding of 6px vertically and 7px horizontally, keeping text concise and visually balanced within its boundary.
- Reserve Arial at 10px for the smallest functional text such as captions and footer links, ensuring it remains legible for utility information.

## Don'ts

- Avoid using any saturated colors unless for specific product photography, as they break the stark brand identity.
- Do not introduce rounded corners on any UI elements; maintain sharp, 0px border-radius across all components.
- Refrain from using drop shadows or complex elevation effects; the design relies on direct contrast and flat surfaces.
- Do not center-align body text or lengthy paragraphs; maintain left-alignment for optimal readability.
- Avoid dense UI elements or excessive information on a single screen; embrace ample white/black space around content.
- Do not deviate from the specified typefaces or letter-spacing values to preserve the distinctive typographic signature of the brand.

## Layout

The page employs a max-width, center-aligned container for most sections, though the hero section and subsequent image grids are full-bleed. The hero features a large, centered headline over a dark background. Sections alternate between full-width product imagery/panels and content blocks, often arranged in simple two-column layouts with text on one side and a supporting visual on the other. A strong grid is evident in product showcase areas, presenting items in responsive 2-column or 3-column structures. The layout is spacious, with distinct vertical section gaps that create a clear visual rhythm. Navigation is a minimalist top bar, sticky on scroll, with clear, high-contrast links.

## Imagery

Photography is paramount, featuring tightly cropped product shots on stark backgrounds (either pure white or close-up textures like corrugated metal). There is a clear focus on the product itself, often worn by models in dynamic, staged poses, rather than lifestyle scenes. Images are full-bleed within their respective spatial divisions, maintaining sharp, unrounded edges. When used decoratively, images can occupy significant screen real estate, acting as visual anchors or section backgrounds. The style is crisp, high-resolution, and devoid of heavy filtering, presenting products transparently.

## Similar Brands

| Business | Why |
| --- | --- |
| A-COLD-WALL* | High-contrast monochrome aesthetic with a focus on bold typography and structured layouts for technical appeal. |
| Y-3 | Minimalist dark theme combined with prominent type and strategic use of negative space to highlight product focus. |
| Peloton | Black and white dominant palette with strong typography and direct product display, implying performance and focus. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
primary action: no distinct CTA color

Example Component Prompts:
Create a hero section with a Midnight Ink background. Headline uses wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 54px, Arctic White text, and 0.10em letter-spacing. A subheading below it uses wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 12px, Arctic White text, and 0.10em letter-spacing, centrally aligned.

Design a Ghost Button for 'DISCOVER': background transparent, border 1px solid Deep Gray (#181818), text Arctic White (#ffffff). Font is wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 12px with 0.10em letter-spacing. Padding 6px top/bottom, 7px left/right. No border-radius.

Generate a navigation link for 'Collection': text Arctic White (#ffffff), font wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 12px with 0.10em letter-spacing. No background or border. Horizontal padding is 5px.

Create a descriptive text block for 'Made with care': Midnight Ink background. Headline uses wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 18px, Arctic White text, and 0.10em letter-spacing. Body paragraphs below it use wfont_8b8bfe_cd7287b5071a4785a78bba57128a74e2 at 13px, Arctic White text, 1.4 line-height, and 0.10em letter-spacing. Ensure ample padding around the text block.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518079610-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518079610-thumb.jpg |
