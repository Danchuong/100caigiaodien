# Bento — Refero Style

- Refero URL: https://styles.refero.design/style/59ac8248-1d64-4df3-92f1-919b50e05602
- Site URL: https://www.bento.me
- ID: 59ac8248-1d64-4df3-92f1-919b50e05602
- Theme: light
- Industry: productivity
- Created: 2026-04-30T01:02:08.518Z
- Ranks: newest: 640, popular: 627, trending: 452

> Vibrant, playful canvases

## Description

Linktree employs a vibrant, high-contrast visual system built around playful, oversized typography and boldly colored, flat surfaces. The design makes liberal use of curved shapes, particularly extreme pill-like radii, creating a soft yet dynamic feel. Color functions primarily as an energetic accent, rotating through vivid primary and secondary hues to delineate sections and highlight interactive elements, while core content remains anchored by highly legible black text on clean white or near-white backgrounds. Components are lightweight with minimal elevation, emphasizing color and shape over heavy borders or shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #1e2330 | neutral | Primary text, deep neutral backgrounds for headers and footers, button text on light backgrounds |
| Pure White | #ffffff | neutral | Page backgrounds, card surfaces, text on dark backgrounds |
| Marble Fog | #f3f3f1 | neutral | Subtle background for UI elements and sections, ghost button backgrounds |
| Ash Concrete | #676b5f | neutral | Muted text, link borders when not active, placeholder text |
| Charcoal Grey | #222222 | neutral | Darker text, button borders |
| Chartreuse Kick | #d2e823 | brand | Primary action buttons, accented card backgrounds, vibrant section backgrounds |
| Hydrangea Bold | #2665d6 | brand | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Lavender Pop | #e9c0e9 | brand | Accent cards, button backgrounds, decorative graphics |
| Iris Deep | #061492 | brand | Deep blue accent for cards and specific buttons |
| Dahlia Grape | #502274 | brand | Rich violet background for content sections |
| Crimson Currant | #780016 | brand | Deep red background for specific content sections and cards |
| Forest Green | #254f1a | brand | Dark green accent for cards and specific text |
| Marigold Gold | #d6a337 | brand | Warm gold accent for cards |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | Helvetica Neue | 400 | 16px | 1.50 | Standard body text and interface elements. A highly legible system font for dense content. |
| Linksans Linksansvf | Inter | 400, 500, 700, 800 | 14px, 16px, 18px, 24px, 28px, 56px, 80px | 1.00, 1.06, 1.07, 1.20, 1.30, 1.50 | Display and headings. The varying letter-spacing creates controlled visual impact, becoming tighter at larger sizes for density. |
| Linksans | Inter | 400, 500, 700 | 12px, 13px, 14px, 15px, 20px, 24px, 25px, 51px | 1.06, 1.20, 1.31, 1.50, 2.32 | Subheadings, navigation items, and larger body text. This family maintains a consistent geometric feel with subtle variations in tracking. |
| yerk |  | 400 | 14px | 1.5 | yerk — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 | -0.19 |
| body | 16 | 1.5 |  |
| subheading | 24 | 1.31 | -0.58 |
| heading | 28 | 1.2 | -0.56 |
| heading-lg | 51 | 1.06 | -2.2 |
| display | 80 | 1 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "32px",
    "inputs": "8px",
    "buttons": "99px",
    "pillForms": "1000px",
    "largeCards": "64px",
    "navigation": "8px"
  },
  "elementGap": "10px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1504px"
}
```

## Components

### Pill Accent Button

**Role:** Primary calls to action

A pill-shaped button with Chartreuse Kick (#d2e823) background and Ink (#1e2330) text. Uses 99px border-radius, 20px vertical padding, and 26px horizontal padding. Energetic and highly visible.

### Filled Square Button

**Role:** Secondary action buttons, form submission

A square button with Marble Fog (#f3f3f1) background and Ink (#1e2330) text. Uses 8px border-radius, 22px vertical padding, and 26px horizontal padding.

### Ghost Text Button

**Role:** Tertiary actions, navigation links

A transparent button with Ink (#1e2330) text and no background or border. Used for discrete actions or internal navigation. No explicit padding, relies on text-based spacing.

### Navigation Link

**Role:** Top navigation items

Transparent background with Ink text. Text size 16px, Linesans Linksansvf, weight 400. No explicit padding or border radius on interaction.

### Hero Section Card

**Role:** Decorative content containers

Transparent background with a 32px border-radius. No box shadow. Used for showcasing images or illustrations within the hero section.

### Colored Feature Card

**Role:** Highlighting key features or statistics

These cards use various brand colors like Hydrangea Bold (#2665d6), Lavender Pop (#e9c0e9), Iris Deep (#061492), Forest Green (#254f1a), Marigold Gold (#d6a337), or Crimson Currant (#780016) backgrounds. They feature an extreme 64px or 1000px border-radius, with no box shadow or padding.

### Input Field

**Role:** User data entry

Pure White (#ffffff) background with a 1px solid Ink (#000000) border, 8px border-radius. Placeholder text uses Ash Concrete (#757575). 8px vertical padding, 16px horizontal padding.

## Do's

- Use Chartreuse Kick (#d2e823) for primary call-to-action buttons, ensuring a 99px border-radius and Ink (#1e2330) text.
- Apply extreme large border radii (64px, 1000px) to decorative cards and feature blocks to maintain a playful aesthetic.
- Prioritize Linksans Linksansvf or Linksans for all headings and subheadings, adjusting letter-spacing according to the specified type scale for visual cohesion.
- Maintain a clear visual hierarchy by using Pure White (#ffffff) or Marble Fog (#f3f3f1) as background for most content areas, contrasted with Ink (#1e2330) text.
- Employ the specified brand colors – Chartreuse Kick, Hydrangea Bold, Lavender Pop, Iris Deep, Dahlia Grape, Crimson Currant, Forest Green, Marigold Gold – as vibrant, full-block section backgrounds on a rotating basis.
- Use Arial for standard body text at 16px to ensure optimal readability for longer passages.
- Apply 10px as the default elementGap for consistency in vertical spacing between discrete UI elements.

## Don'ts

- Avoid using drop shadows on cards or buttons; the design system relies on color, shape, and bold typography for visual differentiation.
- Do not introduce new color hues; strictly adhere to the defined brand and neutral palettes to maintain brand consistency.
- Do not deviate from the specified border-radii; the curved aesthetic is a core part of the brand identity making specific values critical.
- Avoid using subtle grays for interactive elements; actions should be clearly distinguished with vibrant brand colors.
- Do not use generic system fonts for display or heading text; it dilutes the distinctive typographic voice.
- Do not apply padding or margins that break the established elementGap (10px) and sectionGap (48px) rhythm.
- Do not use less than 20px vertical padding on primary buttons; the generous padding is integral to their confident presence.

## Layout

The page uses a maximum content width of 1504px, with content centered. The hero section is full-bleed, aggressively using a brand color as its background (e.g., Chartreuse Kick or Hydrangea Bold) with large, bold, centered typography. Subsequent sections alternate between vibrant solid color backgrounds and Pure White or Marble Fog, creating clear visual segmentation. Content arrangement frequently features large, centered headlines followed by a button, or alternating text-left / visual-right layouts. Card grids are used for features, showcasing product benefits within a collection of creatively shaped and colored containers. The layout is spacious with distinct vertical section spacing, lending an open and friendly feel. A sticky top navigation bar provides consistent access to key sections.

## Imagery

Linktree primarily uses product screenshots and contained lifestyle photography for branding, often with a unique treatment. Product-focused imagery is presented full-bleed or within cards, frequently tinted or placed on brand-colored backgrounds, with rounded corners of varying degrees (from 8px to extreme 1000px pills and 64px large radii). Photography is high-key, vibrant, and features people interacting with digital products or engaging in creative activities. Illustrations are simple, filled, geometric, and often utilize the brand's vibrant color palette, serving decorative and explanatory roles. Icons are filled and monochromatic, complementing the flat UI. Visual density is moderate, allowing imagery to break up text-heavy sections and act as visual anchors.

## Similar Brands

| Business | Why |
| --- | --- |
| Canva | Shares a vibrant, illustrative style with bold colors and rounded shapes, prioritizing visual appeal over stark professionalism. |
| Fiverr | Employs energetic, often bright color palettes and visually distinct components to convey creativity and action. |
| Gumroad | Features a direct, creator-focused design with an emphasis on bold calls to action and approachable, clear layouts. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1e2330
background: #ffffff
border: #000000
accent: #2665d6
primary action: #d2e823 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #d2e823 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a standard input field: '#ffffff' background, 1px solid '#000000' border, 8px border-radius, 8px vertical padding, 16px horizontal padding, placeholder text '#757575'.
3. Create a hero section heading: 'Linksans Linksansvf' weight 800 80px, letter-spacing -1.6px, '#1e2330' color, centered over a '#d2e823' background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510893162-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510893162-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/59ac8248-1d64-4df3-92f1-919b50e05602-1777582983321-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/59ac8248-1d64-4df3-92f1-919b50e05602-1777582983321-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/59ac8248-1d64-4df3-92f1-919b50e05602-1777582983321-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/59ac8248-1d64-4df3-92f1-919b50e05602-1777582983321-preview-detail-poster.jpg |
