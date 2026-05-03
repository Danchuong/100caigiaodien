# Sneak in Peace — Refero Style

- Refero URL: https://styles.refero.design/style/643f90ba-dc30-428b-a145-26f02fe70551
- Site URL: https://www.sneakinpeace.com
- ID: 643f90ba-dc30-428b-a145-26f02fe70551
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:07:23.914Z
- Ranks: newest: 226, popular: 885, trending: 792

> Overlaid fashion showcase

## Description

Sneak in Peace presents a digital fashion platform characterized by a clean, contained UI overlaid on a dynamic background. Its aesthetic balances high-contrast text on bright surfaces with muted interactive elements and a singular vivid red accent for active states. Typography is compact and precise, maintaining a high information density while card-based layouts organize content with subtle elevation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #3d3d3d | neutral | Primary text, icon default, border lines on neutral elements |
| Canvas White | #ffffff | neutral | Main page background, card surfaces, form inputs |
| Deep Space | #000000 | neutral | Strongest text contrast, prominent icon and badge borders, background for overlaid elements |
| Concrete Gray | #8d8d8d | neutral | Muted background for interactive links/cards, secondary text |
| Pale Ash | #f0eeed | neutral | Subtle background for badges and secondary surfaces |
| Wolf Gray | #9e9e9e | neutral | Peripheral text for copyright, subtle body text |
| Silver Mist | #b5b5b5 | neutral | Background for inactive buttons or secondary interactive states |
| Digital Violet | #142161 | accent | Border color for interactive elements and links, decorative accents |
| Action Crimson | #ba2223 | brand | Red action color for filled buttons, selected navigation states, and focused conversion moments. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NTNeuss | Inter | 400, 500 | 8px, 9px, 10px, 11px, 12px, 13px, 14px | 1.00, 1.20, 1.50, 2.10 | Primary UI text for labels, buttons, navigation, and detailed information. Its compact nature supports high information density with active tracking. |
| RecklessNeue-Book | Playfair Display | 400 | 16px, 21px | 1.40, 1.50 | Headlines and descriptive body copy, providing an elegant counterpoint to the more utilitarian NTNeuss. The normal letter spacing contributes to its legibility at larger sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 |  |
| body-sm | 11 | 1.5 |  |
| body | 12 | 1.5 |  |
| body-lg | 13 | 1.5 |  |
| heading-sm | 14 | 1.5 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "26px",
    "cards": "6px",
    "badges": "4px",
    "inputs": "6px",
    "buttons": "6px"
  },
  "elementGap": "6px",
  "sectionGap": "40px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Live Indicator Button

**Role:** Primary Call to Action

Filled button with 'Action Crimson' (#ba2223) background and 'Canvas White' text. Has a 4px `borderRadius` and generous horizontal padding (19px left, 11px right) with 5px vertical padding, indicating a clear, prominent action element.

### Ghost Schedule Button

**Role:** Secondary Action

Ghost button with 'Silver Mist' (#b5b5b5) background, 'Canvas White' text, and a 4px `borderRadius`. Uses 11px horizontal padding and 5px vertical padding to indicate selectable but non-primary status.

### Navigation Link Button

**Role:** Tertiary Navigation Link

Transparent button with 'Canvas White' text and a 6px `borderRadius`. Minimal padding of 6px horizontal and 1px vertical, used for top-level navigation items like 'Sneak TV'.

### Product Info Card (Detailed)

**Role:** Content Display, Primary Information Card

A card with 'Canvas White' (#ffffff) background at 83% opacity, 6px `borderRadius`, and a subtle `boxShadow` of `rgba(0, 0, 0, 0.08) 1px 1px 6px -1px`. Generous internal padding (40px horizontal, 40px top, 8px bottom) for main content display.

### Product Item Card (Compact)

**Role:** List Item, Product Thumbnail

A card with no background, no border radius, and no shadow, used for individual product listings within a scrollable list. Minimal 0px padding, maintaining a dense layout for product browsing.

### Search Input Field

**Role:** User Input

Input field with 'Canvas White' (#ffffff) background, 'Midnight Graphite' (#3d3d3d) text and border, and 6px `borderRadius`. Features 10px vertical padding and 30px right padding with 0px left padding, suggesting an icon might occupy the left space.

### Category Badge

**Role:** Categorization Label

Badge with 'Pale Ash' (#f0eeed) background and 'Deep Space' (#000000) text. Has a 4px `borderRadius` and compact 7px horizontal, 2px vertical padding. Used to categorize items, e.g., 'Mens'.

## Do's

- Prioritize 'Canvas White' (#ffffff) and 'Pale Ash' (#f0eeed) for distinct surface levels, reserving 'Canvas White' for primary content cards and 'Pale Ash' for secondary badges or backgrounds.
- Use 'Action Crimson' (#ba2223) exclusively for vital call-to-action buttons and live indicators to maintain its impact and visual hierarchy.
- Apply `borderRadius` of 6px for most interactive elements like cards, buttons, and inputs, but use 4px for smaller interactive elements like badges.
- Employ the `rgba(0, 0, 0, 0.08) 1px 1px 6px -1px` shadow for subtle elevation on primary content cards, avoiding heavy or multiple shadows.
- Maintain high information density with NTNeuss at small sizes and active `letterSpacing` for UI elements (0.036em-0.122em).
- Utilize 6px as the primary `elementGap` for tight vertical spacing between UI elements within a compact layout.
- Ensure 'Midnight Graphite' (#3d3d3d) is the default for most body and interactive text for maximum readability on light backgrounds.

## Don'ts

- Avoid introducing new saturated colors; adhere strictly to 'Action Crimson' (#ba2223) as the sole vibrant brand accent.
- Do not use heavy shadows or gradients; rely on subtle elevation and clean surface breaks for visual hierarchy.
- Refrain from drastically altering default letter spacing for RecklessNeue-Book; it is intended for fluid readability.
- Do not use border radii larger than 6px for typical UI components, except for specific decorative elements that require 26px.
- Avoid excessive padding on interactive elements; maintain the compact density seen across buttons and badges.
- Do not use dark backgrounds for primary content areas; the theme is predominantly light with overlaid elements.
- Do not introduce complex animations or transitions; stick to provided durations and `ease` timing for a moderate, efficient feel.

## Layout

The page exhibits a full-bleed background often featuring dynamic video or photography, over which a contained, right-aligned UI panel floats. The hero section is characterized by this overlaid panel structure. Content within the UI panel is arranged in a consistent vertical flow, featuring a main informational card followed by a scrollable list of compact product item cards. There is no strict grid for main content outside the panel, but product items within the list appear as uniform, vertically stacked elements. Navigation is minimal, consisting of a top-bar with text links and subtle indicators, while the main UI panel acts as a dynamic content display.

## Imagery

Imagery features tightly cropped product photography on neutral backgrounds, often with model hands interacting with items. Product focus is paramount, with little to no lifestyle context. Iconography is minimalist, likely outlined or solid, with a clean stroke weight, primarily monochrome and functional. Graphics are used sparingly, serving as decorative accents or navigational aids without overwhelming the UI. The overall density is image-heavy in product listings but balanced in informational sections.

## Elevation

| Element | Style |
| --- | --- |
| Product Info Card (Detailed) | rgba(0, 0, 0, 0.08) 1px 1px 6px -1px |

## Similar Brands

| Business | Why |
| --- | --- |
| GOAT | Similar focus on luxury product display with clean, contained UI elements overlaid on dynamic backgrounds. Uses a compact information architecture with subtle elevation. |
| Farfetch | Employs high-contrast text on light surfaces for product listings and detail pages, with a minimal brand accent color and precise typography for a high-end feel. |
| SSENSE | Features a strong lean towards monochrome visuals and a dominant white canvas, accentuating product imagery and utilizing a compact, almost editorial typography style. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #3d3d3d
background: #ffffff
border: #3d3d3d
accent: #142161
primary action: #ba2223 (filled action)

Example Component Prompts:
1. Create a primary action button: 'Live Indicator Button' with text 'LIVE', background 'Action Crimson' (#ba2223), text 'Canvas White' (#ffffff), 4px radius, 5px vertical padding, 19px left padding, 11px right padding.
2. Create a product information card: 'Product Info Card (Detailed)' with background 'Canvas White' (#ffffff) at 83% opacity, 6px radius, `boxShadow` `rgba(0, 0, 0, 0.08) 1px 1px 6px -1px`, 40px horizontal padding, 40px top padding, 8px bottom padding.
3. Create a category badge: 'Category Badge' with text 'Mens', background 'Pale Ash' (#f0eeed), text 'Deep Space' (#000000), 4px radius, 7px horizontal padding, 2px vertical padding, using NTNeuss weight 400 at 9px with 0.06em letter spacing.
4. Create a secondary action button: 'Ghost Schedule Button' with text 'SCHEDULE', background 'Silver Mist' (#b5b5b5), text 'Canvas White' (#ffffff), 4px radius, 5px vertical padding, 11px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518427036-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518427036-thumb.jpg |
