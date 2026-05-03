# Quo (formerly OpenPhone) — Refero Style

- Refero URL: https://styles.refero.design/style/792089e6-c045-498c-8ba1-48d72c206c66
- Site URL: https://www.openphone.com
- ID: 792089e6-c045-498c-8ba1-48d72c206c66
- Theme: light
- Industry: saas
- Created: 2026-04-30T01:01:20.971Z
- Ranks: newest: 644, popular: 1012, trending: 933

> High-contrast digital workspace.

## Description

Quo adopts a stark, high-contrast digital workspace aesthetic: a spacious white canvas punctuated by bold black typography and strategic use of a single vivid lime accent. The design feels direct and functional, leveraging strong visual hierarchy created by heavy black text and subtle, almost invisible UI elements. Components are lightweight with minimal borders, emphasizing content over chrome, and utilizing soft gray backgrounds for subtle differentiation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds |
| Ink Black | #000000 | neutral | Primary text, headings, strong borders, filled button backgrounds, brand logo |
| Surface Gray | #f7f6f5 | neutral | Secondary surface backgrounds, subtle card backgrounds, soft button fills |
| Supporting Text Grey | #4d4d4d | neutral | Body text, secondary descriptive text |
| Subtle Border Gray | #cccccc | neutral | Hairline borders, dividers, disabled states |
| Dark Charcoal | #0a0a0c | neutral | Deepest background for contrast, specialized text |
| Lime Accent | #edfc47 | accent | Green decorative accent for icons, marks, and small graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 500, 600 | 12px, 14px, 16px, 18px, 20px | 1.00, 1.20, 1.30, 1.50 | Body text, navigation, links, captions, small functional labels. A versatile workhorse for content, maintaining readability at all sizes. |
| Roobert | Arial | 500 | 20px, 24px, 40px, 48px, 56px, 64px, 88px | 0.90, 1.10, 1.20 | Headlines, section titles, and prominent callouts. The specific 500 weight and tight letter-spacing create a confident, assertive tone without being overtly heavy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0 |
| body-sm | 14 | 1.5 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 20 | 1.2 | -0.2 |
| heading-sm | 24 | 1.2 | -0.24 |
| heading | 40 | 1.1 | -0.8 |
| heading-lg | 56 | 0.9 | -1.12 |
| display | 88 | 0.9 | -1.76 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "100px",
    "cards": "10px",
    "buttons": "6px",
    "default": "10px"
  },
  "elementGap": "16px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Solid Ink Black (#000000) background with Canvas White (#ffffff) text. Features a 6px border radius and generous 16px horizontal/vertical padding. Dominant action element.

### Ghost Button

**Role:** Secondary action / navigation link

Transparent background with Ink Black (#000000) text and a 1px Ink Black (#000000) border. No border radius. Minimum 8px vertical and 16px horizontal padding.

### Soft Filled Button

**Role:** Light background action / tag

Surface Gray (#f7f6f5) background with Ink Black (#000000) text. Features a 10px border radius and 16px horizontal/vertical padding. Used for filters or less prominent actions.

### Default Card

**Role:** Content container

Transparent background, 10px border radius, no box shadow. 32px internal padding on all sides. Used for structured information blocks.

### Surface Accent Card

**Role:** Information display

Surface Gray (#f7f6f5) background, 10px border radius, no box shadow. No internal padding by default, allowing content to control spacing. Used for visually distinct content blocks.

### Elevated Tooltip Card

**Role:** Ephemeral information

Transparent background with a subtle shadow (rgba(0, 0, 0, 0.1) 0px 11px 17px -10px) and 10px border radius. Padding set to 24px vertical and 32px horizontal. Used for UI overlays or popups.

### Navigation Link

**Role:** Header navigation

Ink Black (#000000) text at 16px Inter 500 weight. Transparent background, no border, no padding or radius. Interactive but visually minimal.

### Subtle Badge

**Role:** Highlight label

Transparent background with Ink Black (#000000) text. No padding or radius. Used for small, unobtrusive labels.

## Do's

- Prioritize Ink Black (#000000) for primary text and calls to action against Canvas White (#ffffff).
- Use Roobert 500 with tight letter-spacing for all headlines and impactful text, emphasizing confidence.
- Apply Surface Gray (#f7f6f5) for subtle background differentiation on cards and soft buttons, maintaining a muted base.
- Incorporate Lime Accent (#edfc47) sparingly for interactive elements, highlights, and decorative touches to provide energetic punctuation.
- Ensure generous internal padding of 32px for main content cards to create a spacious feel.
- Maintain a clear visual hierarchy with strong contrast between text and background, adhering to AAA accessibility standards where possible.
- Utilize 10px border radii for most containers and 6px for buttons, with 100px for pill-shaped elements like tags.

## Don'ts

- Avoid using multiple accent colors; rely on Lime Accent (#edfc47) as the sole chromatic highlight.
- Do not use heavy shadows or gradients; components should generally remain flat or subtly elevated with minimal box-shadows.
- Do not introduce complex background patterns; maintain large areas of Canvas White (#ffffff) or Surface Gray (#f7f6f5).
- Do not use generic system fonts for headlines; always default to Roobert 500 for brand consistency.
- Avoid excessive use of borders; elements should primarily rely on background color to define their boundaries.
- Do not use rounded corners larger than 10px for cards or smaller than 6px for active buttons.
- Do not clutter layouts; aim for comfortable density and clear visual separation with generous spacing.

## Layout

The page adheres to a max-width of 1200px, with content centrally aligned. The hero section is full-width, featuring a prominent centered headline over a white background, occasionally with large, simple illustrative elements. The section rhythm is primarily continuous white space, occasionally broken by soft Surface Gray (#f7f6f5) background bands that seamlessly transition into the next feature block. Content is arranged in alternating text-left/image-right or text-right/image-left patterns, often within multi-column card grids (e.g., 2-column or 3-column feature setups). The layout is spacious with clear vertical separation between sections. Navigation consists of a simple top bar with primary links and prominent 'Log in' and 'Try for free' ghost and filled buttons.

## Imagery

The visual language for imagery is minimal and functional, primarily using product screenshots and software interface depictions. These are often flat, contained within subtle card-like structures with 10px rounded corners, or occasionally full-bleed to showcase the UI. Photography is absent. Illustrations are rare, but when present, they appear as simple, almost outlined or filled icons with a flat, geometric style (e.g., illustrated money stacks in the hero). Icons are typically outlined and monochrome, carrying a consistent stroke weight. Imagery serves an explanatory or product showcase role, focusing on functionality rather than atmosphere or branding, leading to a text-dominant layout with imagery providing visual anchors.

## Similar Brands

| Business | Why |
| --- | --- |
| Superhuman | High-contrast text on white surfaces, minimal UI chrome, dark-colored primary actions, and a focus on speed. |
| Linear | Clean, almost monochrome interface, strong typographic hierarchy, subtle card dividers, and a focus on efficient interaction through lightweight components. |
| Notion | White canvas, emphasis on content, soft background grays for subtle UI elements, and a system built around flexible blocks. |
| Figma | Dominant white canvas, high-contrast text, clear functional typography, and subtle use of background colors for interactive states. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #cccccc
accent: #edfc47
primary action: #000000 (filled action)

Example Component Prompts:
Create a Primary Filled Button: solid Ink Black (#000000) background, Canvas White (#ffffff) text, Roobert 500 at 16px, 6px border radius, 16px vertical and horizontal padding.
Create a Default Card: Canvas White (#ffffff) background, 10px border radius, no shadow, 32px internal padding on all sides.
Create a Navigation Link: Ink Black (#000000) text, Inter 500 at 16px, no background, no border, no padding.
Create a Hero Headline: 'Money is on the Line' in Ink Black (#000000), Roobert 500 at 88px, letter-spacing -1.76px, centered on a Canvas White (#ffffff) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510846773-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510846773-thumb.jpg |
