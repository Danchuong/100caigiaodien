# Netflix Spain — Refero Style

- Refero URL: https://styles.refero.design/style/0e4d933c-aa07-4787-9884-40a0e6c338e4
- Site URL: https://www.netflix.com
- ID: 0e4d933c-aa07-4787-9884-40a0e6c338e4
- Theme: dark
- Industry: media
- Created: 2026-04-29T00:47:24.716Z
- Ranks: newest: 884, popular: 1315, trending: 1316

> Cinematic Dark Canvas – a deep, rich dark mode experience designed to make content pop like a spotlight on a stage.

## Description

The visual system wraps content in a cinematic deep dark mode, prioritizing immersive media consumption. A near-black canvas and layered dark grays (#000000 to #2d2d2d) create a backdrop that highlights vivid content. The primary brand red (#E50914) acts as a high-contrast beacon for interaction. Rounded corners (8px for cards, 4px for buttons) soften the UI, while bespoke typography reinforces a distinct brand identity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page backgrounds, prominent text on light accents, button text on dark surfaces, card borders. |
| Ghost Gray | #0f0f0f | neutral | Subtle background panels, deeper canvas elements. |
| Charcoal Black | #232323 | neutral | Card backgrounds, dark button fills for non-primary actions, elevated surface elements. |
| Slate Shadow | #2d2d2d | neutral | Background for feature sections, subtle card backgrounds. |
| Ash Gray | #323232 | neutral | Subtle card backgrounds. |
| Stone Gray | #393939 | neutral | Subtle card backgrounds, non-primary action button fills. |
| Medium Gray | #414141 | neutral | Muted secondary text, descriptive headings. |
| Silver Mist | #5a5a5a | neutral | Observed in other borderColor. Extracted usage does not support a distinct primary control color. |
| Dove Gray | #808080 | neutral | Muted body text, placeholder text. |
| Cloud White | #ffffff | neutral | Primary text, iconography, essential content highlights. |
| Crimson Blaze | #e50914 | brand | Primary call-to-action buttons, key interactive elements, brand identifier — a vivid punch against the dark canvas. |
| Misty Silver | #b3b3b3 | neutral | Link text, less emphasized content, footer elements. |
| Indigo Nebula Gradient | #192247 | accent | Atmospheric background gradient found in hero sections. |
| Scarlet Halo Gradient | #461518 | accent | Subtle radial highlight around content, suggesting focus or importance. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Netflix Sans | Inter | 400 | 10px, 12px, 13px, 14px, 16px, 20px, 24px | 1.00, 1.17, 1.20, 1.25, 1.50, 1.60 | Body text, captions, input fields, navigation links – designed for screen readability at various sizes while maintaining brand personality. |
| Netflix Sans | Inter | 500 | 10px, 12px, 13px, 14px | 1.00, 1.17, 1.20, 1.25, 1.50, 1.60 | Subheadings, emphasized body text, button text – adds subtle hierarchy and emphasis. |
| Netflix Sans | Inter | 700 | 10px, 12px, 13px, 14px, 16px, 20px, 24px, 56px | 1.00, 1.17, 1.20, 1.25, 1.50, 1.60 | Prominent headings, key information, call-to-action text – provides visual weight for impact. |
| Netflix Sans | Inter | 900 | 100px | 1.00 | Display headings, hero text – maximum impact for large, dominant titles. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body | 14 | 1.5 |  |
| heading-sm | 20 | 1.25 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 56 | 1.17 |  |
| display | 100 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "links": "2px",
    "inputs": "0px",
    "buttons": "4px"
  },
  "elementGap": "12px",
  "sectionGap": "64px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Button

Filled button with 'Crimson Blaze' (#E50914) background, 'Cloud White' (#FFFFFF) text, and 4px border-radius. Padding of 4px vertical, 16px horizontal to appear compact and action-oriented.

### Secondary Action Button

**Role:** Button

Filled button with 'Charcoal Black' (#232323) background, 'Cloud White' (#FFFFFF) text, and 8px border-radius. Used for content actions like play buttons within carousels.

### Ghost Button (White Border)

**Role:** Button

Border-only button with transparent background, 'Cloud White' (#FFFFFF) text and border, no border-radius defined. Padding is 24px on all sides, suitable for large, prominent actions.

### Muted Action Button

**Role:** Button

Subtle filled button with semi-transparent 'Dove Gray' (rgba(128, 128, 128, 0.4)) background, 'Cloud White' (#FFFFFF) text, and 4px border-radius. Padding of 6px vertical, 16px horizontal.

### Media Carousel Card

**Role:** Card

Card with 'Charcoal Black' (#232323) background and 8px border-radius. No box shadow, relying on background color difference for separation.

### Feature Highlight Card

**Role:** Card

Card with 'Slate Shadow' (#2d2d2d) background and 8px border-radius. Used for contextual information blocks. No padding internally, content manages its own spacing.

### Email Input Field

**Role:** Input

Transparent background input with 'Cloud White' (#FFFFFF) text. Padding of 6px vertical, with 34px left and 36px right, creating internal space without visible borders.

### Brand Logo Button

**Role:** Button

Button with 'Absolute Zero' (#000000) background, 'Absolute Zero' (#000000) border, and 8px border-radius. Likely used for specialized branding elements.

## Do's

- Use 'Crimson Blaze' (#E50914) exclusively for primary calls-to-action to signify a conclusive action.
- Layer dark subtle grays from 'Absolute Zero' (#000000) through 'Slate Shadow' (#2d2d2d) for different surface levels to create depth without relying on shadows.
- Apply Netflix Sans weight 900 at 100px with a 1.00 line height for prominent hero screen headlines.
- Maintain 8px border-radius for all cards and 4px for most interactive buttons to keep a consistent soft-edged feel.
- Employ 'Cloud White' (#FFFFFF) for all primary text and iconography against dark backgrounds to ensure high contrast and legibility.
- Utilize 12px for `elementGap` to maintain a comfortable visual rhythm between content blocks.

## Don'ts

- Do not introduce gradients with colors outside the defined accent palette to maintain brand consistency.
- Avoid using multiple colors for text hierarchy; rely on Netflix Sans weights (400, 500, 700) and sizes instead.
- Refrain from adding box shadows to elements; depth is created through background color layering.
- Do not use border-radius values other than 8px for cards, 4px for buttons, and 2px for links.
- Do not use 'Crimson Blaze' (#E50914) for decorative elements or non-actionable text to preserve its impact as a CTA.
- Avoid using a pageMaxWidth; content should stretch full-bleed horizontally when possible, with internal padding controlling text width.

## Layout

The page uses a full-bleed model, with content stretching across the entire viewport width, particularly in the hero section which often features a background video or large image. Max-width constraints appear to be handled by internal padding on textual content rather than a fixed container. The hero features a centered headline and CTA over a dark, immersive background. Sections are often separated by consistent vertical spacing (64px) and alternating dark background colors (e.g., 'Absolute Zero' to 'Slate Shadow'). Content is arranged in fluid grids for media carousels and multi-column layouts for feature sections (e.g., 4-column feature cards). Navigation consists of a sticky top bar.

## Imagery

The visual language is media-centric, showcasing large, full-bleed product artwork (movie/show posters) as both background elements and primary content. Posters are often contained within 8px rounded cards. Icons are subtle, monochromatic, and use the 'Cloud White' (#FFFFFF) against dark surfaces or 'Absolute Zero' (#000000) against lighter surfaces, serving explanatory rather than decorative roles. Imagery is image-heavy, dominating significant portions of screen real estate, especially in hero sections and carousels, serving as direct content showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| Disney+ | Dark-mode interface with a strong brand accent color for CTAs and immersive full-bleed content presentation. |
| HBO Max | Subscription streaming service with a dark, content-focused UI and large, impactful hero sections. |
| Amazon Prime Video | Uses a dark background to highlight media content, with a focused color palette for interaction. |
| Peacock | Dark UI with a bright accent color, media-centric layout with carousels and immersive visuals. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #b3b3b3
accent: #192247 (Indigo Nebula Gradient)
primary action: #e50914 (filled action)

Example Component Prompts:
Create a hero section: Dark background with 'Indigo Nebula Gradient' (#192247). Headline 'Unlimited movies, TV shows, and more' at 100px Netflix Sans weight 900, 'Cloud White' (#FFFFFF). Subtext 'Starts at EUR 8.99. Cancel anytime.' at 24px Netflix Sans weight 400, 'Cloud White' (#FFFFFF). Primary action button 'Get Started' with 'Crimson Blaze' (#E50914) background, 'Cloud White' (#FFFFFF) text, 4px radius, 4px vertical / 16px horizontal padding.
Create a 'Trending Now' section: 'Absolute Zero' (#000000) background. Headline 'Trending Now' at 24px Netflix Sans weight 700, 'Cloud White' (#FFFFFF). Display a carousel of 'Media Carousel Card' with 'Charcoal Black' (#232323) background and 8px radius.
Create a 'More Reasons to Join' feature card: 'Slate Shadow' (#2d2d2d) background, 8px radius. Title 'Enjoy on your TV' at 20px Netflix Sans weight 700, 'Cloud White' (#FFFFFF). Description text at 14px Netflix Sans weight 400, 'Cloud White' (#FFFFFF).
Create a global navigation button: 'Ghost Button (White Border)' with transparent background, 'Cloud White' (#FFFFFF) text and border, no explicit radius, 24px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423613630-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423613630-thumb.jpg |
