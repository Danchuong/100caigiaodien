# GitHub — Refero Style

- Refero URL: https://styles.refero.design/style/c3ceca5c-d329-4559-b947-016172941ba2
- Site URL: https://github.com
- ID: c3ceca5c-d329-4559-b947-016172941ba2
- Theme: dark
- Industry: devtools
- Created: 2026-03-07T17:05:56.000Z
- Ranks: newest: 1079, popular: 36, trending: 68

> Midnight command center, subtly glowing

## Description

GitHub's design system evokes a dark, digital canvas – a midnight command center feel. Key elements are subtle translucency, glowing accents of blue, green, and violet, and a spacious, comfortable layout. Typography is precise and organized, contrasting bright text against deep backgrounds. Components are lightweight with rounded corners, often appearing as frosted overlays or bordered elements on a dark, unbounded canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space | #0d1117 | neutral | Primary page background, base for most dark surfaces |
| Midnight Ink | #000000 | neutral | Elevated surfaces, code blocks, modal backgrounds, and deeply shadowed areas |
| Code Canvas | #151a22 | neutral | Secondary background for sections, code editor areas, and subtle surface differentiation |
| Subtle Gray | #21262d | neutral | Borders between sections, divider lines, and very soft visual separation |
| Ash Gray | #283041 | neutral | Faint background for inactive states or subtle borders, hinting at elevation |
| Ghost White | #ffffff | neutral | Primary text, prominent icons, and active navigation elements. Also used as a white background for some translucent elements |
| Faded Silver | #f0f6fc | neutral | Secondary text, subheadings, and muted UI elements that require slightly less prominence than primary text |
| UI Gray | #9198a1 | neutral | Placeholder text, secondary icons, and less prominent text labels |
| Muted Text | #7c8980 | neutral | Subtle helper text, less important details, and desaturated captions |
| Polar Blue | #8dd6ff | brand | Link text, outlined button borders, and interactive icon accents. It's a key brand identifier for interactive elements |
| Spring Green | #08872b | brand | Primary action button background. Signals positive action or confirmation |
| Cosmic Violet | #8c93fb | accent | Decorative card borders and subtle illustrative accents, creating a sense of digital magic |
| Neon Green | #5fed83 | accent | Highlight text or decorative elements, particularly within code or feature descriptions |
| Interface Blue | #1f6feb | accent | Solid background for specific active elements or content blocks, providing a stronger visual presence |
| Violet Glow | #e6b7fe | accent | Illustrative element — background highlight for abstract graphics |
| Blue-Violet Orb | #a7a2ff | accent | Illustrative element — focused glow emanating from central points in graphics |
| Vapor Trail Blue | #5993d4 | accent | Illustrative element — upward-sweeping light beams in abstract backgrounds |
| Deep Gradient Start | #000240 | accent | Illustrative element — beginning of a deep blue gradient for background effects |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Mona Sans | Inter | 400, 425, 440, 460, 480, 500, 600, 800 | 14px, 16px, 18px, 22px, 24px, 40px, 48px, 64px | 1.00, 1.08, 1.18, 1.20, 1.30, 1.40, 1.50 | Primary brand typeface for all headings, body text, UI elements, and navigation. Its wide range of weights and precise letter-spacing ensures a consistent, modern voice. |
| Mona Sans VF | Inter | 400, 500, 600, 700 | 12px, 14px, 16px, 24px | 1.00, 1.25, 1.43, 1.50 | Used for smaller text, auxiliary information, and captions where Mona Sans would be too heavy. Its variable font capabilities likely allow for subtle optical adjustments. |
| Mona Sans Mono | JetBrains Mono | 400 | 14px | 1.50 | Monospace variant for code snippets, technical terms, and environments where code-like presentation is desired, ensuring visual consistency with the main typeface. |
| ui-monospace | Menlo, Monaco | 400 | 14px | 1.50 | Fallback monospace font for code blocks and technical displays, ensuring readability across systems. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 | 0.015 |
| body | 16 | 1.5 | 0.01 |
| subheading | 18 | 1.5 | 0.01 |
| heading-sm | 22 | 1.4 | 0.01 |
| heading | 24 | 1.4 | 0.01 |
| heading-lg | 40 | 1.2 | -0.035 |
| display | 64 | 1 | -0.035 |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "60px",
    "cards": "24px",
    "input": "8px",
    "buttons": "6px",
    "default": "6px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "8px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Header Button

**Role:** Navigation, secondary actions

Text in Ghost White (#ffffff) on a transparent background, 8px padding. No border. Used for top navigation items.

### Pill Ghost Button

**Role:** Secondary, subtle actions, category filters

Text in Ghost White (#ffffff) on a transparent background with 8px vertical, 16px horizontal padding and a 60px border radius, creating a pill shape. Used for navigation and category tabs.

### Primary Action Button

**Role:** Main call to action

Spring Green (#08872b) background, Ghost White (#ffffff) text, 6px border radius, with 6px vertical and 28px horizontal padding. Signals the most important action on a page.

### Outlined Accent Button

**Role:** Secondary interactive actions, often related to product features

Polar Blue (#8dd6ff) text on a transparent background with a 1px Ghost White (#ffffff) border, 8px border radius, and 6px vertical, 28px horizontal padding. Provides a clear interactive target without being as dominant as the primary button.

### Code Block Card

**Role:** Displaying code snippets or technical content

Semi-transparent surface (rgba(255, 255, 255, 0.06)), 24px border radius only on top corners (24px 24px 0px 0px), no internal padding, no box shadow. Edges are sharp at the bottom, suggesting continuity.

### Floating Content Card

**Role:** Elevated content blocks or interactive elements

Highly translucent background (rgba(255, 255, 255, 0.2)), 24px border radius, 8px internal padding on all sides, no box shadow. Appears as a frosted overlay.

### Input Field

**Role:** User text input

Transparent background with 18px top, 12px right, 0px bottom, 18px left padding. No explicit border specified, relying on contrasting text input/label (placeholder) against the dark background. 8px border radius.

### Pill Input

**Role:** Search or short text inputs

Transparent background, Ghost White (#ffffff) text, with an 8px border radius. Likely uses implicit top/bottom paddings of 8px and side as 16px to create the pill shape, similar to pill buttons.

## Do's

- Prioritize Deep Space (#0d1117) as the canvas background for most page sections.
- Use Ghost White (#ffffff) for all primary body and heading text for maximum contrast on dark backgrounds.
- Apply Spring Green (#08872b) exclusively for primary call-to-action button backgrounds.
- Utilize Polar Blue (#8dd6ff) for all links, outlined buttons, and interactive icons.
- Apply a 6px border radius for most interactive elements like buttons and inputs, but use 60px for pill-shaped elements.
- Ensure cards use a larger 24px border radius, often with only top corners rounded for a more architectural feel.
- Maintain comfortable element spacing using multiples of 4px, especially 16px for elementGap.

## Don'ts

- Avoid using bright, saturated colors for backgrounds; stick to the dark neutral palette.
- Do not use generic gray borders (such as #f0f6fc) on interactive elements; Polar Blue (#8dd6ff) is reserved for interaction outlining.
- Never introduce hard, sharp corners on cards or primary buttons; maintain a consistent rounded aesthetic.
- Do not use overly large or decorative drop shadows; the system favors subtle glows and translucency over heavy elevation.
- Avoid dense packing of information; allow ample `elementGap` and `sectionGap` for a comfortable user experience.
- Do not vary font families outside of Mona Sans variants and monospace fallbacks; maintain typographic consistency.
- Avoid using Mona Sans Mono or ui-monospace for non-code content; these are specifically for technical text.

## Layout

The page primarily employs a max-width contained layout, though the hero section spans full-bleed with a deep, dark gradient background. Content sections follow a vertical rhythm, often featuring alternating left/right text-and-visual arrangements or centered stacks. Card grids, typically 3-column, are used for features. The density is spacious, providing ample breathing room between information blocks. Navigation is managed via a sticky top bar, featuring Ghost Header Buttons and a pill-shaped search input.

## Imagery

The visual language for imagery is characterized by glowing, abstract 3D elements and vibrant, often purple or blue-hued, digital illustrations. These are frequently featured as floating objects or emanating light sources against dark backgrounds, adding a sense of futuristic technology and depth. Product screenshots are clean and integrated, showing code or UI elements with subtle, contrasting highlights. Icons are typically outlined or filled in Ghost White or subtle grays, occasionally accented with Polar Blue. The imagery serves both decorative atmosphere and to explain complex concepts, with a density that allows for significant textual information on screen.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Similar dark theme with vivid accent colors for interactive elements and abstract, glowing background visuals. |
| Linear | Employs a precise, compact typography with subtle background gradients and a focus on dark mode UI with minimal, functional color hints. |
| Notion | While not dark-first, it shares the principle of a clean, functional UI with distinct text levels and a reliance on whitespace/spacing for hierarchy. |
| Stripe | Uses a sophisticated color palette with intentional accent colors against a largely neutral background, and clean, modern typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #0d1117
border: #21262d
accent: #8dd6ff
primary action: #08872b (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #08872b background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a feature card: Floating Content Card (rgba(255, 255, 255, 0.2) background, 24px radius, 8px padding). Title 'Accelerate your workflow' in Mona Sans, size 24px, weight 600, color Ghost White (#ffffff). Body text 'From your first line of code...' in Mona Sans, size 16px, weight 400, color Faded Silver (#f0f6fc).
3. Create a navigation link: 'Solutions' in Mona Sans, size 16px, weight 400, color Ghost White (#ffffff). Hover state text Polar Blue (#8dd6ff). Ensure 16px right margin from the next element.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777505732760-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777505732760-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c3ceca5c-d329-4559-b947-016172941ba2-1777557298416-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c3ceca5c-d329-4559-b947-016172941ba2-1777557298416-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c3ceca5c-d329-4559-b947-016172941ba2-1777557298416-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c3ceca5c-d329-4559-b947-016172941ba2-1777557298416-preview-detail-poster.jpg |
