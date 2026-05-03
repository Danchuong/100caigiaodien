# Not Real — Refero Style

- Refero URL: https://styles.refero.design/style/c0a3f588-74b7-4fad-b557-1fc7cd7bd777
- Site URL: https://notreal.tv
- ID: c0a3f588-74b7-4fad-b557-1fc7cd7bd777
- Theme: light
- Industry: design
- Created: 2026-04-30T02:13:13.078Z
- Ranks: newest: 416, popular: 1300, trending: 1296

> High-contrast editorial canvas

## Description

NotReal employs a stark, print-inspired aesthetic characterized by high-contrast typography and a restrained achromatic palette. The design system emphasizes generous white space and precise visual hierarchy through font choices, rather than color or complex layouts. Project showcases act as vibrant focal points within an otherwise minimalist, editorial grid.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #f2f2f2 | neutral | Primary page and surface background |
| Ink Black | #292a2c | neutral | Primary text, navigation links, and element borders |
| Deepest Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Telegraf | Inter | 400 | 15px, 18px, 20px, 24px, 25px, 55px | 0.75, 1.00, 1.08, 1.10, 1.25, 1.33, 1.67, 2.00 | Body copy, navigation, descriptive text, and secondary headings. Its clean, technical feel provides legibility across various scales. |
| Ogg | Playfair Display | 400 | 24px, 26px, 55px | 1.06, 1.10, 1.50 | Primary headings and artistic display text. Its high contrast and elegant serifs provide a distinct, editorial brand identity, with tight negative tracking to maintain a compact appearance. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 15 | 1.67 |  |
| body | 18 | 1.33 | 0.38 |
| subheading | 20 | 1.25 |  |
| heading-sm | 24 | 1.1 | -0.48 |
| display | 55 | 0.75 | -1.98 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "11px",
  "sectionGap": "44px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Top-level navigation element

Text in Ink Black (telegraf, 400, 18px, 1.33 lh, 0.38px ls), with a bottom border of 1px Deepest Black on hover or active state.

### Site Logo

**Role:** Brand identifier

Exclusively uses Ogg, 400 weight, 55px size, with -1.98px letter spacing. Color is Ink Black, positioned prominently in the top left.

### Hero Description Block

**Role:** Introductory text for the agency

Set in Telegraf 400, Ink Black, using 15px text and 1.67 line height for body, and a 25px size with 1.08 line height for key phrases. Utilizes a compact letterSpacing of 0.025em for emphasis.

### Project Thumbnail Card

**Role:** Showcase individual projects

Consists of an image filling its container, with no visible borders or radius. Text below uses Telegraf 400, 15px, Ink Black for tags and project title in Ogg 400, 26px with -0.52px letter spacing.

### Copyright/Status Text

**Role:** Informational text in footer or sidebar

Small text in Telegraf 400, 15px, Ink Black, with a tight lineHeight of 1.67. Often rotated or positioned vertically to save space.

## Do's

- Prioritize high contrast between text (#292a2c, #000000) and background (#f2f2f2).
- Use Ogg font for all prominent headings and brand elements to establish a distinct editorial tone, applying its specific negative letter spacing for a dense effect.
- Employ Telegraf for all body text, navigation, and secondary UI elements, maintaining its default letter spacing for optimal readability.
- Maintain a compact density for typography by using specified line heights such as 1.33 for 18px body text and 0.75 to 1.10 for larger headings.
- Structure layouts with generous Canvas White (#f2f2f2) surrounding content blocks to create breathing room and emphasize core visual elements.
- Apply Deepest Black (#000000) as a 1px border for interactive states or as an accent border for text links and visual separators.
- Ensure all imagery is crisp and occupies significant visual space, acting as the primary splash of color and detail against the monochrome UI.

## Don'ts

- Do not introduce new color hues; strictly adhere to the achromatic palette with #f2f2f2, #292a2c, and #000000.
- Avoid decorative elements like shadows, gradients, or complex background patterns; rely on typography and spacing for visual hierarchy.
- Do not use generic system fonts or fallbacks as primary UI text; Telegraf and Ogg are fundamental to the brand's identity.
- Prevent cluttered layouts; prioritize white space, using 44px for section gaps and 18px for internal padding around content.
- Do not round corners on any UI elements; all shapes should be sharp and angular, reflecting a precise, craft-oriented aesthetic.
- Avoid using multiple font families beyond Telegraf and Ogg; maintain typographic simplicity.
- Do not apply excessive padding or margin to small text elements; keep them dense and contained within 11px general element spacing.

## Layout

The page exhibits a full-bleed layout for its overall structure, embracing the screen edges. The hero section features the logo and navigation prominently at the top, with a centered description block, while project showcases are arranged in an alternating text-left/image-right pattern or stacked vertically. Sections maintain consistent vertical spacing of 44px, creating a rhythmic, clean flow. There is a strong single-column grid for content blocks, with images often spanning full width, and an implicit two-column grid for text-and-image pairings. Navigation is a minimal top-bar, always visible.

## Imagery

Imagery primarily consists of high-quality, product-focused 3D renders and CGI, often showcasing intricate textures and dynamic lighting. The treatment is full-bleed or contained within a sharp, rectangular frame, never overlapping or with rounded corners. Images serve as vibrant, expressive focal points that break the monochromatic UI, acting as a product showcase to explain content and impress. Density is high within the image blocks themselves, but these blocks are surrounded by text-dominant and spacious negative space.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA Design | Similar emphasis on high-contrast black and white, oversized serif typography for headings, and a content-forward, grid-based layout. |
| Working Not Working | Shares a portfolio-centric layout with prominent imagery, clean sans-serif body text, and a minimalist navigation. |
| Chermayeff & Geismar & Haviv | Exhibits a classic modernist approach with strong typographic hierarchy, a limited color palette, and high-quality hero imagery for case studies. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #292a2c
background: #f2f2f2
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

3-5 Example Component Prompts:
Create a navigation bar: Background Canvas White (#f2f2f2). Links in Telegraf 400, 18px, #292a2c (0.38px ls), with a 1px Deepest Black (#000000) bottom border on hover. The logo is Ogg 400, 55px, #292a2c, -1.98px ls.

Generate a project entry card: Full-width image. Title below in Ogg 400, 26px, #000000 (-0.52px ls). Project tags below in Telegraf 400, 15px, #292a2c, with default letter spacing. No borders or radius.

Design the agency description block: Use Telegraf 400, #292a2c. Key phrases at 25px (1.08 lh, 0.025em ls), body text at 15px (1.67 lh). Text aligned left, with 44px vertical padding above and below.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515156685-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515156685-thumb.jpg |
