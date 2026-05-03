# Caserne — Refero Style

- Refero URL: https://styles.refero.design/style/c2702938-b670-414c-ba47-94618212085e
- Site URL: https://caserne.com
- ID: c2702938-b670-414c-ba47-94618212085e
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:50:23.197Z
- Ranks: newest: 49, popular: 1080, trending: 1044

> Gallery Grid, Dark Canvas

## Description

Caserne employs a stark, high-contrast dark mode aesthetic, emphasizing content through its absence of clutter. Typography is the primary visual element, with a single, highly legible sans-serif font deployed across various weights. A singular vivid orange serves as the functional accent, acting as a precise visual punctuation against the expansive black and white canvas. The design prioritizes a minimalist presentation, allowing large-format imagery and bold type to command attention.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page backgrounds, large content blocks — creates a deep, infinite canvas for content |
| Ghost White | #f2f2f2 | neutral | Primary text, prominent links, card borders, subtle dividing lines — forms the central contrast against dark backgrounds |
| Cloud Burst | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Steel Gaze | #858484 | neutral | Muted helper text, secondary descriptions, subdued captions — provides hierarchical separation without visual noise |
| Deep Graphite | #333333 | neutral | Icon outlines, subtle borders in light areas (if present) — provides a soft contrast without being stark black |
| Ember Glow | #ff4513 | accent | Orange outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ABC Oracle | Inter | 100, 400, 700 | 13px, 14px | 1.29, 1.38, 1.43 | Primary typeface for all text content, from navigation to body text. Its range of weights allows for subtle differentiation in hierarchy, from the light weight often used in navigation to the more substantial for emphasis. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "90px",
  "cardPadding": "5px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Top-level navigation items

Text uses ABC Oracle, weight 400, 13px size, Cloud Burst (#ffffff) color. On hover, the text color changes to Ember Glow (#ff4513).

### Work Item Title

**Role:** Titles for portfolio pieces or content cards

Uses ABC Oracle, weight 400, 14px size, Ghost White (#f2f2f2) color, with a line-height of 1.38.

### Work Item Subtitle

**Role:** Descriptive text for portfolio pieces or content cards

Uses ABC Oracle, weight 400, 14px size, Steel Gaze (#858484) color, with a line-height of 1.38.

### Info / Contact Link

**Role:** Small, functional links in footer or secondary sections

Text uses ABC Oracle, weight 400, 13px size, Ghost White (#f2f2f2) color. No explicit hover state provided, implying standard browser link behavior if not overridden.

## Do's

- Maintain a high contrast ratio between text and background, predominantly using Ghost White (#f2f2f2) or Cloud Burst (#ffffff) on Absolute Zero (#000000).
- Utilize Ember Glow (#ff4513) exclusively for interactive states or minimal decorative accents, ensuring it never competes with primary content.
- Employ ABC Oracle's lighter weights (100, 400) for navigation and body text, reserving the 700 weight for critical emphasis.
- Apply a default border-radius of 0px to all elements, maintaining crisp, sharp edges throughout the interface.
- Implement consistent vertical spacing with 90px between major content sections and 5px between closely related elements.
- Position all navigation links and key interactive elements with top and left padding of 5px to ensure consistent visual alignment.
- Allow large-format photography to occupy significant screen real estate, often full-bleed, as the primary visual content.

## Don'ts

- Avoid introducing additional chromatic colors; Ember Glow (#ff4513) is the sole acceptable accent color.
- Do not use shadows or complex elevation techniques; the design relies on flat planes and strong contrast for depth.
- Refrain from using heavily rounded corners; all elements should maintain sharp, angular forms.
- Do not break the dark background scheme with light-themed sections or cards; maintain an overall dark aesthetic.
- Avoid excessive ornamental elements or decorative visuals that detract from the content and minimalist ethos.
- Do not use generic system fonts; ABC Oracle must be used for all text content to maintain brand identity.
- Avoid small unreadable text sizes; ensure minimum text size is 13px, with adequate line height for readability.

## Layout

The page maintains a full-bleed layout, with content extending to the edges of the viewport rather than being constrained by a `pageMaxWidth`. The hero section features large, immersive photography as its background, usually with minimal overlaid text. Section rhythm is driven by alternating content blocks, often full-width images or black quadrants, maintaining consistent vertical spacing. Content arrangement frequently uses a grid-like structure for displaying work, where large image tiles with minimal text details are presented. The overall density leans towards spacious and impactful presentation rather than information-heavy blocks. Navigation is a simple, fixed top bar presenting minimal links without complex menus.

## Imagery

This system primarily features large-format, full-bleed photography and product screenshots. The photography style is direct, often showcasing structures or branding elements with a focus on clean lines and real-world application. Imagery is contained within sharp, unrounded edges and occupies significant visual space, acting as hero content. Icons, if present, are minimal (e.g., Apple logo) and monochromatic, aligning with the stark visual language. The density is image-heavy, with visuals frequently dominating sections over text.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Similar high-contrast dark mode aesthetic with minimal accent colors and strong typography. |
| AIGA | Emphasizes large-format imagery in a grid layout with a focus on design work, often with stark backgrounds. |
| ACME | Clean, modernist design with sharp edges, a limited color palette, and premium typography. |
| Basic Type Co | Heavy reliance on typography as a primary design element, often with a monochrome base and selective color use. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #f2f2f2
background: #000000
border: #f2f2f2
accent: #ff4513
primary action: no distinct CTA color

Example Component Prompts:
1. Create a top navigation bar: background Absolute Zero (#000000). Links are 'Caserne', 'Work', 'Culture', 'Notes', 'Studio', 'Contact', 'FORUM' using ABC Oracle, weight 400, 13px, Cloud Burst (#ffffff). Padding-left for each link is 5px.
2. Design a work item card: background Absolute Zero (#000000), with a Ghost White (#f2f2f2) border on hover. Title 'Avril supermarket' uses ABC Oracle, weight 400, 14px, Ghost White (#f2f2f2). Subtitle 'A new standard for accessible healthy living' uses ABC Oracle, weight 400, 14px, Steel Gaze (#858484). Padding around text should be 5px.
3. Create a decorative accent dot: color Ember Glow (#ff4513), 3px, used before a text label.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521007065-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521007065-thumb.jpg |
