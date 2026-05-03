# My Site 3 — Refero Style

- Refero URL: https://styles.refero.design/style/0ae2e849-7a1f-432a-89c6-b49d4a988300
- Site URL: https://www.al-murphy.com
- ID: 0ae2e849-7a1f-432a-89c6-b49d4a988300
- Theme: light
- Industry: media
- Created: 2026-04-30T02:40:01.837Z
- Ranks: newest: 325, popular: 551, trending: 322

> Sketchbook of absurdities

## Description

The design system for Al Murphy embraces a whimsical, hand-drawn aesthetic, appearing as illustrations on a digital sketchbook. It features a high contrast monochrome palette of black and white, with thin, hand-sketched lines defining all elements. Typography is minimal, relying on system fonts for navigation and a custom, expressive font for decorative elements, maintaining a light and unpolished feel. The layout provides ample negative space allowing the 'sticker-like' illustrations to breathe and maintain their organic, playful rhythm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ebebeb | neutral | Page background, primary surface for content areas |
| Line Art Black | #000000 | neutral | Illustrations, text, borders, and general UI outlines |
| Near Black | #000308 | neutral | Subtle background shading for interface sections |
| Paper White | #ffffff | neutral | Text and other elements contrasting against Near Black backgrounds or borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | Arial | 400 | 10px, 13px | 1.20 | Navigation links, general body text, and small descriptive labels, ensuring readability within the whimsical context. |
| helvetica-w01-roman | Helvetica Neue | 400 | 14px | 1.10 | Decorative headlines and expressive textual elements, contributing to the hand-drawn, illustrative character of the site. |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "17px",
  "sectionGap": "61px",
  "cardPadding": "17px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element

A ghost button with no background or padding, using Line Art Black as border and text color. Radius is 0px. Used for navigation and minimal interactive elements.

## Do's

- Prioritize use of Canvas White (#ebebeb) for page backgrounds to maintain the sketchbook aesthetic.
- Use Line Art Black (#000000) for all text color, borders, and UI outlines to unify the hand-drawn style.
- Maintain the whimsical, illustrative tone with helvetica-w01-roman for decorative headings at 14px 400 weight.
- Employ Arial 400 weight at 10px or 13px for all body text, links, and navigation, ensuring legibility without distracting from illustrations.
- Ensure generous use of Element Gap (17px) and Section Gap (61px) to create breathing room between illustrations and content sections.
- Utilize Button Primary Fill (#143b0a) with Button Primary Text (#8bff82) for any primary call-to-action buttons.
- Feature 'Ghost Button' for navigation and secondary actions, defined by a 1px Line Art Black (#000000) border and 0px radius.

## Don'ts

- Avoid using strong, saturated colors for backgrounds or large areas; restrict color to illustrations and defined interactive states.
- Do not introduce sharp, geometric shapes or hard edges; maintain the organic, hand-drawn feel with 0px radii.
- Do not use elaborate hover states or complex animations on UI elements; keep interactions simple and swift.
- Avoid heavy shadows, gradients, or elevated components that would contradict the flat, illustrated visual language.
- Do not break away from the dominant monochrome and hand-drawn line style for any new pictorial elements or icons.
- Do not use strong typographic hierarchy with varying weights or extended type scales beyond the defined Arial and helvetica-w01-roman roles.
- Avoid dense information blocks; instead, distribute content with generous spacing and illustration breaks.

## Layout

The page operates on a full-bleed grid pattern, resembling notebook paper with a light gray Canvas White background (#ebebeb) and faint grid lines. Content, primarily illustrations, is scattered freely without a strict max-width container, embracing an artistic collage-like arrangement. The hero section is characterized by a central, dominant illustration surrounded by smaller, equally dispersed graphics. Sections are implicitly defined by the arrangement of these visual elements and consistent vertical spacing rather than explicit dividers or alternating bands. Navigation is minimal, a simple top bar with Ghost Buttons for links. Overall density is high with imagery but sections maintain breathability through generous element gaps.

## Imagery

The site is dominated by a diverse collection of highly stylized, often absurd, hand-drawn illustrations. These are flat, outlined with black, and filled with a limited, vibrant color palette. The illustrations are contained, appearing like stickers scattered across the page, without overlap or complex masking. They serve primarily as decorative atmosphere and elements of brand identity, rather than explanatory content. The site is visually dense with these illustrations, creating a rich, whimsical, and somewhat chaotic visual experience.

## Similar Brands

| Business | Why |
| --- | --- |
| The Oatmeal | Features hand-drawn, cartoonish illustrations as the primary content and visual style, with minimal UI. |
| Saturday Morning Breakfast Cereal (SMBC) | Relies heavily on comic-strip style illustrations and simple, utilitarian typography on a light background. |
| Cyanide & Happiness | Utilizes a distinct, often absurd, hand-drawn visual style with black outlines and flat colors, similar to sticker-like elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ebebeb
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a navigation link: 'Books' using Arial font, 13px, weight 400, color #000000, 0px border-radius, no background.
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
3. Create a hero section headline using helvetica-w01-roman, 14px, weight 400, color #000000, positioned as a decorative element.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516786005-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516786005-thumb.jpg |
