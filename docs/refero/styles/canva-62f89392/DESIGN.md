# Canva — Refero Style

- Refero URL: https://styles.refero.design/style/62f89392-609d-45b7-b9df-7a5acd529864
- Site URL: https://canva.com
- ID: 62f89392-609d-45b7-b9df-7a5acd529864
- Theme: mixed
- Industry: design
- Created: 2026-03-06T20:40:35.000Z
- Ranks: newest: 1082, popular: 63, trending: 391

> Vibrant digital toolkit — a painter's palette on a dark canvas, each tool glowing with possibility.

## Description

Canva's design language evokes a vibrant, creative toolkit, powered by a dynamic and playful color spectrum. The foundation is a cool, dark canvas illuminated by a kaleidoscope of vivid gradients and accent colors, signaling a platform built for imagination. A consistent softness is achieved through prevalent 8px and 9999px border radii, contrasting with the sharpness of sans-serif typography. This creates an accessible but powerful experience, where creativity feels both boundless and precisely guided.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0f1015 | neutral | Primary background for dark sections, text, and primary surface containers. Provides high contrast for vibrant accents. |
| Canvas White | #ffffff | neutral | Dominant page background for light sections, primary text on dark backgrounds, and interactive element fills. |
| Deepest Shadow | #000000 | neutral | Primary text color on light backgrounds, strong borders, and most icon fills. Used for maximum contrast. |
| Ash Grey | #575a5f | neutral | Secondary text, subtle icon fills, and borders for less prominent elements. A softer alternative to black. |
| Silver Mist | #d7d9de | neutral | Subtle borders, very light backgrounds for hover states, and divider lines. A near-white neutral. |
| Rich Plum | #8b3dff | brand | Interactive elements, links, and primary brand accent color. A recurring vivid violet. |
| Electric Lavender | #a370fc | brand | Lighter shade of violet for secondary accents, hover states on interactive elements, and illustrative touches. |
| Fuchsia Burst | #e950f7 | accent | Illustrative accents and occasional highlights, adding a pop of magenta. |
| Scarlet Glow | #ff3d4d | accent | Eye-catching accents, status indicators, and illustrative elements. A vibrant, warm pop. |
| Tangerine Pop | #ff6105 | accent | Highlighting elements, icons, and occasional accents for warmth and vibrancy. |
| Vivid Violet | #9729ff | brand | Specific illustrative and icon accents, adding depth to the purple palette. |
| Turquoise Dream Gradient | #00C4CC | brand | Highlighting key sections, hero backgrounds, and illustrative elements. Creates a dynamic and modern feel. |
| Sunset Fire Gradient | #FF3B4C | brand | Vivid, energetic backgrounds for call-to-action sections or celebratory elements. |
| Digital Spectrum Gradient | #992BFF | brand | Complex background for hero sections or unique promotional areas, showcasing range and creativity. |
| Ocean Twilight Gradient | #00C4CC | brand | Atmospheric background for sections emphasizing depth, technology, or creative tools. |
| Magenta Bloom Gradient | #BD19FF | brand | Accent gradient for dramatic flair or to highlight specific product features. |
| Emerald Growth Gradient | #007D26 | semantic | Used for 'success' or 'growth' themed sections, adding a lush, positive tone. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Canva Sans | Inter, Arial, sans-serif | 400, 500, 600 | 14px, 16px, 18px, 24px, 28px, 32px, 36px, 56px, 64px, 80px | 1.10, 1.25, 1.33, 1.38, 1.40, 1.50, 1.57 | Primary brand typeface used across all UI elements from body text to display headlines. Its weights and feature settings ('ss02', 'ss03') contribute to a modern, friendly yet precise feel. |
| Times | serif | 400 | 10px | 1.20 | Legacy font with sparse usage, appearing in specific minor contexts. |
| Arial | sans-serif | 400 | 13px | 1.20 | Fallback font used in specific button and body contexts, for broad compatibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.2 |  |
| body-lg | 16 | 1.38 | -0.16 |
| subheading | 18 | 1.33 | -0.18 |
| heading-sm | 24 | 1.25 | -0.24 |
| heading | 28 | 1.25 | -0.28 |
| heading-lg | 32 | 1.25 | -0.32 |
| display-sm | 36 | 1.25 | -0.36 |
| display | 56 | 1.1 | -0.56 |
| display-lg | 64 | 1.1 | -0.64 |
| display-xl | 80 | 1.1 | -0.8 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "pills": "9999px",
    "buttons": "8px",
    "default": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "44px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Ghost Button

**Role:** Main call to action on vibrant backgrounds

White text on transparent background, with 8px border-radius and 4px vertical, 8px horizontal padding. Border highlights on hover.

### Primary Filled Button

**Role:** Default interactive button

White background with 'Deepest Shadow' text. Border radius 8px, padding 0px vertical, 12px horizontal. Subtle top and bottom borders from the same color.

### Pill Button

**Role:** Category filters, tags, or secondary actions

Transparent background with 'Deepest Shadow' text. 9999px border radius for a full pill shape. Generous 16px vertical, 24px horizontal padding.

### Navigation Link

**Role:** Top-level navigation items

Transparent background with 'Deepest Shadow' text. No padding or border. Used for lightweight navigation.

### Feature Card (Dark)

**Role:** Content container for features or product sections on dark backgrounds

Background color 'Midnight Ink' with 8px border radius. No internal padding or shadow (content fills card).

### Gradient Section Card

**Role:** Highlighting distinct product features with a strong visual identity

Utilizes one of the vivid thematic gradients (e.g., Turquoise Dream Gradient, Sunset Fire Gradient) as background. Features prominent imagery and concise text.

### Header Navigation

**Role:** Global site navigation

Consists of multiple 'Navigation Link' components. Occupies 0-80px height of the header area. Links are 'Deepest Shadow' on `Canvas White` context.

### Hero CTA Button

**Role:** Prominent call to action in hero sections.

White text on transparent background, 8px radius, 7px vertical and 12px horizontal padding. The text is 'Canvas White'.

## Do's

- Prioritize 'Canva Sans' across all typographic elements, leveraging its 400, 500, and 600 weights.
- Use 8px border radius for all card and button components to ensure a consistent friendly softness, with 9999px reserved for pill shapes.
- Implement 'Midnight Ink' (#0f1015) as the primary background for dark themed content blocks to maximize vibrancy of super-imposed elements.
- Pair 'Deepest Shadow' (#000000) for text on 'Canvas White' (#ffffff) for maximum readability and AAA contrast.
- Utilize the brand gradients (e.g., Turquoise Dream Gradient, Sunset Fire Gradient) for main hero sections and feature highlights.
- Apply 'Rich Plum' (#8b3dff) as the primary accent for interactive elements and links.

## Don'ts

- Avoid using Times or Arial for primary brand content; reserve them for legacy or specific minor contexts as detected.
- Do not introduce new border radii beyond 8px and 9999px.
- Do not overuse 'Deepest Shadow' for backgrounds; it is primarily intended for text and sharp UI elements.
- Avoid using a flat color for hero sections; leverage a brand gradient to convey dynamism.
- Do not introduce new color hues; work within the established vivid brand and accent palettes.
- Do not apply shadows without purpose; use the defined shadows for subtle elevation or interactive states only.

## Layout

The page primarily uses a max-width contained layout pattern but features full-bleed hero sections for dramatic effect. The overall rhythm combines expansive, gradient-filled introductory areas with alternating light and dark bands for content sections, providing visual segmentation and interest. Content is frequently arranged in two or three-column grids for features and templates, often with text-left/image-right or image-top/text-bottom compositions within cards. Spaces between sections are comfortable (sectionGap of roughly 44px). The header is a sticky top bar, providing global navigation and calls to action.

## Imagery

The visual language is a blend of conceptual, playful product illustrations and tightly cropped, brand-aligned photography or 3D renders. Illustrations are colorful, dimensional, and often feature floating UI elements or abstract shapes, designed to convey dynamism and creativity. Photography, when used, tends to be product-focused or lifestyle, but always integrated with graphic overlays or bold color treatments. Icons are filled, colorful, and often use the accent and brand gradients, reinforcing the vibrant palette. Imagery serves both decorative atmosphere and explanatory content, often layered to demonstrate product capabilities in a vibrant, engaging way. Density is moderate, balancing textual information with impactful visual storytelling.

## Elevation

| Element | Style |
| --- | --- |
| Card Interaction | rgba(64, 79, 109, 0.06) 0px 0px 0px 0.5px, rgba(24, 44, 89, 0.137) 0px 2px 4px 0px, rgba(24, 44, 89, 0.07) 0px 6px 12px 0px |
| Inset Button (Dark) | rgba(53, 65, 90, 0.2) 0px 0px 0px 1px inset |
| Inset Button (Light) | rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: Text: #000000, Background: #ffffff, CTA: #8b3dff, Border: #d7d9de, Accent: #e950f7.

Example Component Prompts:
1. Create a hero section with 'Turquoise Dream Gradient' (#00C4CC) as the background. Headline text 'What will you design today?' at 80px Canva Sans weight 600, color #ffffff, letter-spacing -0.8px, line-height 1.1. Subheading 'Make AI-powered social posts, videos, presentations, and more with Canva.' at 24px Canva Sans weight 400, color #ffffff, line-height 1.25. Include a 'Primary Ghost Button' centered below the text: 'Start designing for free', with white text and 8px border-radius.
2. Design a feature card section. Use a 'Midnight Ink' (#0f1015) background. Incorporate three 'Feature Card (Dark)' components horizontally, each with a 'Digital Spectrum Gradient' (#992BFF) background for a contained visual. Each card should have 8px border-radius and include a heading at 28px Canva Sans weight 500, color #ffffff, letter-spacing -0.28px, and body text at 16px Canva Sans weight 400, color #d7d9de.
3. Implement a primary navigation bar. Use 'Canvas White' (#ffffff) as the background. Include multiple 'Navigation Link' components with text color 'Deepest Shadow' (#000000), using Canva Sans weight 400, size 16px, letter-spacing -0.16px. The 'Sign up' button should be a 'Primary Filled Button' with background rgba(255, 255, 255, 0.898), text #0f1015, and 8px border-radius, while the 'Log in' button is a 'Primary Ghost Button' with white text.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776119257790-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776119257790-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/62f89392-609d-45b7-b9df-7a5acd529864-1777557498442-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/62f89392-609d-45b7-b9df-7a5acd529864-1777557498442-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/62f89392-609d-45b7-b9df-7a5acd529864-1777557498442-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/62f89392-609d-45b7-b9df-7a5acd529864-1777557498442-preview-detail-poster.jpg |
