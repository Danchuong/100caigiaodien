# Magnetism — Refero Style

- Refero URL: https://styles.refero.design/style/a8a1e9e6-d252-49c7-b201-91b3055487df
- Site URL: https://www.magnetism.fr/en
- ID: a8a1e9e6-d252-49c7-b201-91b3055487df
- Theme: dark
- Industry: agency
- Created: 2026-04-30T02:29:50.013Z
- Ranks: newest: 361, popular: 1269, trending: 1251

> High-fashion editorial canvas

## Description

Magnetism presents a stark, high-contrast aesthetic reminiscent of an editorial spread. Its theme is dark with light gray typography and hairline borders, creating a sophisticated tension. The layout is structured yet fluid, with large, impactful imagery anchoring blocks of stark typography. Components are minimal, often ghosted or outlined, allowing content and photography to dominate the visual field.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Rich Black | #222222 | neutral | Primary text, deep surface undertones, high-contrast accents against lighter background |
| Night Canvas | #000000 | neutral | Page background, foundational dark areas |
| Silver Mist | #e5e7eb | neutral | Primary text on dark backgrounds, active navigation elements, hairline borders |
| Graphite | #343434 | neutral | Muted text, secondary navigation items, subtle background distinctions |
| Cool Steel | #dbdbdb | neutral | Decorative strokes, subtle UI lines, alternative muted text color |
| Pale Ash | #cccccc | neutral | Hover states for light text elements, subtle background variations |
| Muted Gray | #aaaaaa | neutral | Helper text, tertiary navigation links |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| TT Hoves Pro Trial | Montserrat | 300, 400, 500 | 8px, 10px, 11px, 14px, 16px, 20px | 1.00, 1.50, 2.00, 2.50 | Primary typeface for all text content including headlines, body, navigation, and captions. Its slightly extended letterforms with varied tracking contribute to a refined, spacious feel. |
| NeueMontreal | Inter | 400 | 24px | 1.50 | Used for specific body text sections, providing a contrasting legibility against the primary typeface. Its slightly wider, more geometric form adds a subtle shift in tone. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 2 |  |
| body-sm | 11 | 2 |  |
| body | 14 | 2 |  |
| body-lg | 16 | 2 |  |
| heading-sm | 20 | 2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "12px",
  "sectionGap": "32px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Primary navigation element

Text link in Silver Mist (#e5e7eb) with 7px right and 9px left padding. On hover, text becomes Graphite (#343434). Inactive links are Muted Gray (#aaaaaa).

### Works Section Header

**Role:** Section title and interactive link

Text in Silver Mist (#e5e7eb) with 32px padding, often accompanied by hairline borders (#e5e7eb).

### Project Card

**Role:** Showcase individual projects or campaigns

Completely borderless and shadowless, with 0px radius. Relies on its visual content (images) and surrounding negative space for definition. Text in Silver Mist (#e5e7eb).

### Hairline Divider

**Role:** Visual separator for content blocks

1px solid line in Silver Mist (#e5e7eb), providing subtle structural definition against dark backgrounds.

### Muted Text Link

**Role:** Secondary and footer navigation links

Text in Muted Gray (#aaaaaa) with 12px right and 14px left padding, no underline by default.

## Do's

- Prioritize Silver Mist (#e5e7eb) for all primary text on dark backgrounds to maintain high contrast and the signature aesthetic.
- Use TT Hoves Pro Trial with varied letter spacing (e.g., 0.1000em for smaller text, normal for headlines) to establish a distinct typographic rhythm.
- Define UI elements through hairline borders (1px solid #e5e7eb) rather than heavy fills or shadows.
- Maintain a spacious content-empty border around page elements, allowing visuals to breathe.
- Employ the 0px border-radius system-wide for a sharp, angular component aesthetic.
- Ensure large, impactful imagery dominates sections, often full-bleed, with minimal surrounding UI elements.

## Don'ts

- Avoid using box-shadows or elevation effects; the design relies on flat surfaces and borders for depth.
- Do not deviate from the achromatic color palette; saturated or bright colors are reserved for content imagery only.
- Do not introduce rounded corners on any UI elements; all corners should be sharp 0px radius.
- Refrain from using heavy fills for buttons or interactive elements; prefer ghosted or outlined styles.
- Avoid dense UIs; prioritize ample negative space and large content blocks over compact information displays.

## Layout

The page uses a full-bleed model, with content stretching to the viewport edges, but internal content is implicitly centered, giving the impression of a wide, unconstrained canvas. The hero is a full-bleed image with centered, large-format typography overlaying it. Section rhythm is driven by alternating large image blocks, often with left-aligned or centered text overlays. Content arrangement is primarily a single column for large hero sections, transitioning to two columns for work showcases where image and text exist side-by-side. The density is spacious, ensuring significant breathing room around visual and typographic elements. Navigation is a minimal sticky header with text links.

## Imagery

The site heavily relies on high-quality, full-bleed photography and art-directed product shots. These images are the primary visual content, often occupying significant screen real estate. The treatment is often full-bleed with sharp, raw edges, integrating directly into the layout without frames or masks. Photography ranges from vibrant, richly colored lifestyle and product shots to more subdued, artistic compositions, occasionally featuring strong blues. It serves primarily as product showcase and mood-setting atmosphere, creating a visually rich and distinctive brand identity.

## Similar Brands

| Business | Why |
| --- | --- |
| Acme Co. | Dark UI with minimal, stark typography and high-contrast light text. |
| FutureDeluxe | Heavy reliance on full-bleed, high-impact imagery as primary content focus. |
| Build in Amsterdam | Editorial aesthetic with a focus on luxury branding and product showcases. |
| Sagmeister & Walsh | Bold, expressive typography integrated tightly with layout and imagery, often monochromatic. |
| Bureau for Visual Affairs | Minimalist interface with strong visual content, preferring outlines and transparency over solid fills. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #e5e7eb
background: #000000
border: #e5e7eb
accent: none observed
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary navigation link: text 'Works' in Silver Mist (#e5e7eb) using TT Hoves Pro Trial, weight 400, size 14px, 7px right padding, 9px left padding. On hover, text color changes to Graphite (#343434).
2. Create a section divider: a 1px solid line in Silver Mist (#e5e7eb).
3. Create a footer link: text 'Contact us' in Muted Gray (#aaaaaa) using TT Hoves Pro Trial, weight 400, size 11px, 12px right padding, 14px left padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516171633-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516171633-thumb.jpg |
