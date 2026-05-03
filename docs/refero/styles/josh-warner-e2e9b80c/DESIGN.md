# Josh Warner — Refero Style

- Refero URL: https://styles.refero.design/style/e2e9b80c-b548-4f86-a4d7-7a6b07d1c2e1
- Site URL: https://www.joshwarner.design
- ID: e2e9b80c-b548-4f86-a4d7-7a6b07d1c2e1
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:01:39.912Z
- Ranks: newest: 462, popular: 1126, trending: 1074

> Midnight gallery, sculpted light

## Description

Josh Warner's portfolio combines stark dark surfaces with a clean, highly legible typography scale. The design system emphasizes clarity and directness through minimal use of color, relying instead on high contrast, subtle achromatic gradients, and precise spacing. Interactive elements are softly rounded, creating a tactile impression against the otherwise structured aesthetic. Most visual weight is carried by conceptual 3D renders rather than UI adornment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space | #0f0f0f | neutral | Primary background, primary surface color for larger sections |
| Inky Void | #000000 | neutral | Dominant text color for light backgrounds, borders, and subtle shadow definition against darker surfaces |
| Pure Canvas | #f0f0f0 | neutral | Primary text color against dark backgrounds, ghost button text and borders |
| Medium Gray | #696969 | neutral | Secondary text and subtle accent lines for headings |
| Light Gray | #b8b8b8 | neutral | Muted body text and less prominent borders |
| Darkened Canvas | #1a1a1a | neutral | Footer background, slightly darker than the main background for subtle section separation |
| Shadow Base | #080808 | neutral | Darkest shadow base, used for subtle depth |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | system-ui, 'Helvetica Neue', Arial, sans-serif | 400 | 12px | 1.20 | Utility text, navigation links, button text, and small interactive elements. Relies on system defaults for efficiency and clean rendering. |
| Inter Display | 'Inter', sans-serif | 400 | 14px, 16px, 20px, 32px, 40px | 1.00, 1.20, 1.25, 1.43, 1.50, 1.56 | Primary text for body content and all headings. Its uniform letter-spacing across sizes maintains a consistent optical density, contributing to the site's compact and readable feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.5 | 0.4 |
| body | 16 | 1.2 | 0.4 |
| subheading | 20 | 1.56 | 0.4 |
| heading | 32 | 1.25 | 0.4 |
| display | 40 | 1.43 | 0.4 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "40px",
    "cards": "4px",
    "icons": "12px",
    "inputs": "8px",
    "buttons": "100px"
  },
  "elementGap": "10px",
  "sectionGap": "64px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Header Button

**Role:** Navigation button, pill-shaped

Transparent background, Pure Canvas text and border, with a large 100px border-radius for a distinct pill shape. Padding: 4px vertical, 16px horizontal.

### Hire Me Button

**Role:** Primary action button, filled and subtly rounded

Filled with Pure Canvas, Inky Void text color, with 8px border-radius. Padding: 6px vertical, 14px horizontal. Appears for crucial calls to action.

### Avatar Button

**Role:** Profile or identity button

Transparent background with a subtle Inky Void border. Features an internal 4px left padding to accommodate an icon, and a significant 100px border-radius for a circle or long pill shape. Text is Inter Display, size 12px, weight 400.

### Project Card

**Role:** Item display in a grid, image-focused

Uses a 4px border-radius on images to imply containment. Images are often full-bleed within a section that hints at minimal borders.

### Interactive Link

**Role:** Inline textual link

Uses system sans-serif font at 12px weight 400. Hover effects may involve subtle background changes or underline, using Pure Canvas color.

## Do's

- Prioritize high contrast using Pure Canvas (#f0f0f0) for text on Deep Space (#0f0f0f) or Inky Void (#000000) backgrounds.
- Use Inter Display for all major text (headings, body), ensuring 0.04em letter-spacing is applied consistently.
- Apply Deep Space (#0f0f0f) for main backgrounds and Darkened Canvas (#1a1a1a) for secondary backgrounds like footers or distinct sections.
- Utilize large border-radii (100px, 40px) for buttons and interactive elements to create a soft, pill-like appearance.
- Maintain compact spacing, with a default elementGap of 10px between interactive components and text blocks.
- Emphasize content over UI chrome; keep borders minimal and colors purely functional.
- Use the system sans-serif font at 12px for utility text, navigation, and minimal interactive elements.

## Don'ts

- Avoid using saturated colors for UI elements; color is reserved for content aesthetics, not interface.
- Do not introduce complex gradients or inner shadows on UI elements; elevation is sparse and subtle.
- Steer clear of aggressive, heavy typography for headlines; rely on Inter Display's light weight and 0.04em tracking.
- Do not use small border-radii (e.g., 2px) on buttons or primary interactive elements; aim for 8px, 40px, or 100px.
- Introduce excessive padding or wide margins that disrupt the compact information density.
- Do not use dark gray text on a dark background; ensure compliance with the 15:1 contrast ratios provided.
- Avoid any drop shadows on text, and keep container shadows subtle and very low opacity.

## Layout

The page primarily uses a full-bleed dark background with content centered and constrained by an implicit max-width, around 1200px. The hero section is full-bleed with large, conceptual 3D renders and centered, high-contrast headlines. Subsequent sections can alternate between centered content blocks and full-width imagery, often with text-left/image-right or vice-versa patterns for project showcases. Vertical spacing between sections is generous (around 64px), creating distinct visual breaks. Navigation is a sticky top bar with minimal ghost buttons and a prominent brand emblem.

## Imagery

This site features highly stylized 3D renders that serve as key hero elements and section dividers. Images feature sharp details, often with metallic or textured surfaces against dark backgrounds, sometimes with subtle dramatic lighting. The renders are full-bleed for hero sections or artfully integrated into the layout, taking up significant visual space to convey artistic skill. Product mockups are clean and high-fidelity, presented either as isolated objects or within conceptual environments. Iconography is minimal, primarily text-based or simple system icons.

## Elevation

| Element | Style |
| --- | --- |
| Hovered Button | rgba(0, 0, 0, 0.16) 0px 0px 10px 0px |
| Card/Container | rgba(0, 0, 0, 0.5) 0px 1px 10px -2px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Shares a sophisticated dark mode aesthetic with high-contrast typography and subtle interactive elements. |
| Linear | Features a minimalist UI, compact spatial density, and a focus on content clarity over decorative components. |
| Figma | Exhibits a clean, functional design with high legibility and precise use of typography, using a reduced color palette. |
| Roblox Developer Documentation | Utilizes a dark, high-contrast theme where text and code are presented with clarity, relying on strong visual hierarchy through typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #f0f0f0
background: #0f0f0f
border: #000000
accent: none observed
primary action: #f0f0f0 (filled action)

Example Component Prompts:
1. Create a header navigation button: Pure Canvas text, 12px system sans-serif, 100px radius, 4px vertical / 16px horizontal padding. Border: 1px solid Pure Canvas. Background: transparent.
2. Create a Primary Action Button: #f0f0f0 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
4. Create a content card with an image: Deep Space background, 4px border-radius, `rgba(0, 0, 0, 0.5) 0px 1px 10px -2px` shadow. Internal image has 4px border-radius. Text (Inter Display, 16px, weight 400, #f0f0f0, letter-spacing 0.4px).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514482364-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514482364-thumb.jpg |
