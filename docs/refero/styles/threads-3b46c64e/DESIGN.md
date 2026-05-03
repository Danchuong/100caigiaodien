# Threads — Refero Style

- Refero URL: https://styles.refero.design/style/3b46c64e-b733-4d70-8cd0-531ca1f92937
- Site URL: https://www.threads.com
- ID: 3b46c64e-b733-4d70-8cd0-531ca1f92937
- Theme: light
- Industry: media
- Created: 2026-04-30T00:59:12.567Z
- Ranks: newest: 649, popular: 744, trending: 634

> Minimalist Content Stream

## Description

Threads presents a clean, content-focused experience with minimal ornamentation. The visual system prioritizes clarity and directness through a largely achromatic palette, precise typography, and subtle surface differentiation. Interaction is marked by a single, distinct blue accent, deployed sparingly to guide user attention. Components are lightweight with soft, rounded corners, emphasizing an approachable and modern feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #000000 | neutral | Primary text, critical body text, button text, icon fills, strong borders |
| Canvas White | #fafafa | neutral | Page backgrounds, elevated card surfaces |
| Silver Mist | #d5d5d5 | neutral | Subtle dividers, hairline borders, muted visual separation |
| Platinum Gray | #969696 | neutral | Secondary text, disabled button borders, UI outlines |
| Dark Metal | #424242 | neutral | Tertiary text, less prominent icons, secondary borders for content blocks |
| Action Azure | #385898 | brand | Primary action indicators (outlined buttons, active links), brand accent for interactive elements, distinct information display |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| system-ui | Inter, Noto Sans, Arial | 400, 600 | 12px, 13px, 15px | 1.33, 1.40 | All text elements, including body, links, buttons, and headings. Its native and adaptable rendering across device platforms contributes to the system's lightweight feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 |  |
| body-sm | 13 | 1.4 |  |
| body | 15 | 1.4 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "images": "8px",
    "avatars": "50%",
    "buttons": "1000px",
    "modules": "18px"
  },
  "elementGap": "12px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Minimal interactive element for secondary actions

Transparent background, Midnight Graphite (#000000) text. No padding, 0px border radius.

### Pill Ghost Button

**Role:** Minimal interactive element, for icon-only actions or small secondary controls where a soft touch is desired.

Transparent background, Midnight Graphite (#000000) text. 1000px border radius (effectively pill-shaped). No padding.

### Primary Filled Button

**Role:** Main call-to-action button for critical user flows

Midnight Graphite (#000000) background, Canvas White (#fafafa) text. 10px border radius. Horizontal padding of 16px.

### Circular Icon Button

**Role:** Small, usually icon-only buttons for navigation or quick actions.

Transparent background, Midnight Graphite (#000000) icon. 50% border radius (perfectly circular). No padding.

### Feed Post Card

**Role:** Primary content container for user-generated posts

Canvas White (#fafafa) background. 8px border radius. Uses a subtle rgba(0,0,0,0.04) 0px 0px 12px 0px shadow for elevation. Padding is typically 12-16px internally, matching content spacing.

### Navigation Side Rail

**Role:** Main persistent navigation element

Transparent background, with icon colors from Midnight Graphite (#000000) for inactive states and Action Azure (#385898) for active. Offers icons with 1000px and 50% border radii for visual elements within.

## Do's

- Prioritize a clean, achromatic base: use Canvas White (#fafafa) for main backgrounds and Midnight Graphite (#000000) for primary text and icons.
- Introduce Action Azure (#385898) only for primary interactive elements like links and outlined buttons, and for active navigation states.
- Apply soft borders and separation with Silver Mist (#d5d5d5) for hairline dividers and Platinum Gray (#969696) for more substantial outlines.
- Maintain high contrast for all text against backgrounds, ensuring AAA accessibility with Midnight Graphite (#000000) on Canvas White (#fafafa).
- Use flexible 'system-ui' fonts at specified sizes (12px, 13px, 15px) for consistent readability and platform-native feel.
- Ensure all interactive elements have highly rounded corners (1000px) or full circles (50%) to convey approachability and clear affordance.
- Differentiate content blocks with subtle elevation using rgba(0,0,0,0.04) 0px 0px 12px 0px shadows rather than heavy backgrounds or strong borders.

## Don'ts

- Do not introduce new chromatic colors; restrict accents to Action Azure (#385898) and only when signifying interaction or brand.
- Avoid strong gradients or overly decorative background textures; surfaces should remain flat and understated.
- Do not use sharp 0px corners on interactive elements; all buttons and similar controls require a minimum of 8px radius, preferably 1000px for pill shapes.
- Do not use generic box-shadows; adhere to the specified subtle shadow for cards to maintain a lightweight feel.
- Avoid large, impactful headlines; all typography should remain compact and direct, primarily relying on 'system-ui' at smaller sizes.
- Do not use excessive white space between elements; maintain a compact density with 12px for `elementGap` for visual efficiency.
- Do not use non-system fonts; the UI relies on a native font feel for consistency and performance.

## Layout

The page uses a full-bleed structure for the main content stream, without a fixed `pageMaxWidth`, allowing content to adapt to viewport width. The hero section is minimal, simply a centered 'Home' title. The primary layout consists of a left-aligned, fixed sidebar for navigation and a central, scrolling content stream. Content posts are vertically stacked cards, with consistent vertical `sectionGap` spacing but no strong visual dividers between them. Card content is arranged in a text-dominant, centered stack within its container, often with images or media filling a central block. There is no complex grid usage beyond a single-column content stream. The density is compact, designed for efficient scrolling and information consumption. Navigation is handled by a sticky left-aligned sidebar with functional icons and a minimal top bar with a 'Log in' button.

## Imagery

The visual language for imagery is primarily functional. It consists of user-uploaded content (images, GIFs, videos) within cards, product screenshots, and avatar photography for user profiles. Photography is generally unstyled, maintaining its original context, often displayed within contained, rounded (8px) frames. Icons are minimalist, outlined, and monochromatic, primarily using Midnight Graphite (#000000) or Action Azure (#385898) to indicate states. Imagery serves explanatory and content-display purposes, rather than decorative atmosphere, often occupying significant visual space within a post's content area.

## Similar Brands

| Business | Why |
| --- | --- |
| Twitter (X) | Monochromatic interface, heavy reliance on text and content cards, similar sidebar navigation, and a single accent color for interaction. |
| Bluesky | Minimalist social media UI, white background, compact typography, and a focus on content stream rather than heavy graphic elements. |
| Mastodon | Similar column-based, content-heavy feed structure, with a focus on text content, system fonts, and a primarily achromatic palette. |
| LinkedIn | Professional content feed, system-font usage, and largely neutral color palette with specific blue accents for links and primary actions. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000
- background: #fafafa
- border: #d5d5d5
- accent: #385898
- primary action: #385898 (outlined action border)

Example Component Prompts:
1. Create a feed card: Canvas White (#fafafa) background, 8px border-radius, using rgba(0,0,0,0.04) 0px 0px 12px 0px shadow. Include body text using 'system-ui' 15px/1.4 weight 400 in Midnight Graphite (#000000).
2. Create an outlined action link: Text 'View Post' in Action Azure (#385898), 'system-ui' 13px/1.4 weight 400. Use a 1px border in Action Azure (#385898) with 1000px border-radius.
3. Create a circular icon button: 50% border-radius, transparent background, with a Midnight Graphite (#000000) icon, 'system-ui' 15px/1.4 weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510730368-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510730368-thumb.jpg |
