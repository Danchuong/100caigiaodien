# Everafter — Refero Style

- Refero URL: https://styles.refero.design/style/3b3aa977-c2d3-45a4-b440-0068f53237c6
- Site URL: https://www.everafter.ai
- ID: 3b3aa977-c2d3-45a4-b440-0068f53237c6
- Theme: mixed
- Industry: saas
- Created: 2026-04-30T03:24:21.227Z
- Ranks: newest: 164, popular: 1110, trending: 1079

> Violet Gradient Command Center – a luminous digital workspace with shimmering accents.

## Description

EverAfter projects a refined, intelligent digital environment using a deep violet primary color accented by vibrant, almost neon, hues. Typography is a confident mix of a distinctive serif for headings and a clean sans-serif for body text, establishing an authoritative yet approachable tone. Surfaces are predominantly light and spacious, juxtaposed with the dramatic dark hero sections, creating clear visual hierarchy and drawing attention to key AI product features. Interaction elements are clearly defined with ample padding and generously rounded corners, suggesting a user-friendly, modern experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Orchid | #221437 | brand | Primary text, deep backgrounds for hero sections and footers, UI borders and structural elements. The foundational color setting a dramatic, digital atmosphere |
| Astral Purple | #2a1244 | brand | Gradient primary color, subtle background accents in dark sections |
| Electric Violet | #793cfb | brand | Primary action buttons, active states, key highlights for cards and interactive elements. Its vibrancy cuts through the deep violet base |
| Rose Bloom | #ff7aba | accent | Decorative card highlights, accent elements within UI for visual interest |
| Sunshine Yellow | #ffd633 | accent | Decorative card highlights, accent elements, UI iconography |
| Deep Teal | #205779 | accent | Decorative elements, iconography, and subtle graphic strokes within UI illustrations |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, input fields, and all text on dark backgrounds. Provides necessary contrast and airiness for content |
| Ghost Marble | #f8f5ff | neutral | Secondary page backgrounds, subtle surface elevation for cards and sections. A very subtle off-white that prevents starkness |
| Ash Outline | #e2e2e2 | neutral | Subtle borders for content sections, hairline dividers between elements, input field borders |
| Smoke Gray | #333333 | neutral | Secondary text, muted link text |
| Graphite | #000000 | neutral | Iconography, strong graphic elements, occasionally for very dark text that needs maximum contrast |
| Soft Shadow Blue | #daebf58c | neutral | Subtle shadow tint for UI elements, suggesting depth without heavy opacity |
| Hero Gradient | #e7cae4 | brand | Background gradient for hero sections and large visual modules, creating a dynamic backdrop |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Moret | Georgia, serif | 400, 600, 700 | 36px, 40px, 42px, 50px, 56px | 1.15, 1.20 | Distinctive serif typeface used for all main headings (h1-h3) across most sizes, conveying a sense of established authority and unique brand identity. The consistent letter-spacing across sizes enhances its presence. |
| Inter | Helvetica Neue, Arial, sans-serif |  |  |  | Clean and legible sans-serif for body text, navigation items, buttons, and subheadings. Ensures readability and maintains a modern, functional aesthetic against the more expressive Moret headlines. |
| Moret 400 |  | 400 | 36px | 1.2 | Moret 400 — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.5 | 0 |
| body-sm | 16 | 1.5 | 0 |
| body | 18 | 1.6 | 0 |
| heading-sm | 36 | 1.2 | -0.68 |
| heading | 42 | 1.2 | -0.8 |
| heading-lg | 50 | 1.15 | -0.95 |
| display | 56 | 1.15 | -1.06 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "999px",
    "cards": "24px",
    "inputs": "999px",
    "buttons": "999px",
    "small_elements": "11px",
    "decorative_elements": "28px"
  },
  "elementGap": "8px",
  "sectionGap": "186px",
  "cardPadding": "42px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Primary Action Button

**Role:** Main call to action, highlighted with the brand's Electric Violet.

Filled button with background #793cfb, text #fefefe (Canvas White). Padding 5px vertical, 36px horizontal. Radius 999px.

### Ghost Button (Brand Focus)

**Role:** Secondary action button, uses brand text/border against transparent background for less emphasis.

Transparent background, text #221437 (Midnight Orchid), border color #221437. Radius 999px. Padding 0px. Text is a smaller font size than primary actions.

### Ghost Button (Neutral Text)

**Role:** Least emphasized action, often for navigation or tertiary actions.

Transparent background, text #221437 (Midnight Orchid), default border color is absent. Radius 0px. Padding 0px.

### Default Card

**Role:** Standard content containers for features, testimonials, or data displays.

Background #fcfcff (Canvas White), border radius 24px, no shadow, padding 42px on all sides.

### Product Interface Input

**Role:** User input fields within forms or interface controls.

Background #ffffff (Canvas White), text #221437 (Midnight Orchid), border #221437 (Midnight Orchid) at 8% opacity. Radius 999px. Padding 8px vertical, 12px horizontal, with possible 29.6px left padding for icon.

### Accent Tag - Rose Bloom

**Role:** Small, decorative tags or status indicators.

Background #ff7aba (Rose Bloom), border radius 999px, no shadow, 0px padding. Used for small, illustrative elements.

### Accent Tag - Sunshine Yellow

**Role:** Small, decorative tags or status indicators.

Background #ffd633 (Sunshine Yellow), border radius 999px, no shadow, 0px padding. Used for small, illustrative elements.

## Do's

- Use Moret font for all headlines, applying `letterSpacing: -0.0190em` consistently for high impact.
- Apply Electric Violet (#793cfb) only for primary interactive elements, reserving its vividness for key actions.
- Ensure all buttons and inputs have a 999px border-radius, creating a soft, approachable pill-shaped appearance.
- Maintain a clear visual hierarchy by using Midnight Orchid (#221437) for primary text and Canvas White (#ffffff) for page backgrounds in light sections.
- Separate sections with a minimum of 186px vertical spacing, and content blocks with 42px internal card padding to ensure readability and spaciousness.
- Utilize Ghost Marble (#f8f5ff) as a subtle background for secondary content sections or slightly elevated interface elements to add depth without heaviness.
- Apply the Hero Gradient (linear gradient from #e7cae4 to #f8f5ff) specifically for prominent banner areas and large hero sections to build visual drama.

## Don'ts

- Do not use saturated colors on anything other than accent tags or primary calls to action; maintain a mostly neutral palette for content.
- Avoid applying heavy drop shadows; the system favors subtle elevation cues like background color changes or faint shadow tints.
- Do not deviate from the established border radii; the combination of 999px for interactive elements and 24px for cards is a signature element.
- Refrain from tight spacing; an ample use of a minimum 8px element gap and much larger section gaps defines the spacious aesthetic.
- Do not mix Moret with other serif typefaces; stick to Moret for display and Inter for body copy.
- Avoid using any black (#000000) for body text; it's reserved for specific graphic elements or very large, impactful text against light backgrounds.
- Do not introduce new border styles; the design primarily uses subtle 1px solid borders or relies on background contrast for separation.

## Layout

The page primarily uses a max-width contained layout of 1440px, with content centered. The hero section often features a full-bleed dark background with a dramatic gradient, hosting a large, centered headline and calls to action. Subsequent sections alternate between light (#f8f5ff) and dark (#221437) backgrounds, creating a clear visual rhythm. Content is arranged in a fluid text-left/visual-right pattern, or centered stacks. Card grids are used for features and testimonials, typically in a 3-column layout. The overall density is spacious, with significant vertical padding between sections (186px) to give elements room to breathe. Navigation is a consistent top bar that remains visible, featuring clear product categories and prominent 'Log In' and 'Get a demo' actions.

## Imagery

Imagery primarily consists of product screenshots featuring clean, modern UI designs, often placed within a device mockup on a plain or subtly gradient background. These are explanatory and product-focused, showcasing the software's functionality rather than lifestyle. Abstract, geometric illustrations with a distinct visual style (e.g., mazes, data visualizations) are used decoratively to explain complex concepts. Icons are generally filled and monochromatic, supporting quick visual cues. Imagery plays a significant role in conveying information and product value, occupying substantial visual space, especially in the hero and feature sections, but always with a contained, structured presentation rather than full-bleed.

## Elevation

| Element | Style |
| --- | --- |
| Button Shadow | rgba(255, 255, 255, 0.2) 0px 1px 1px 0px, rgba(255, 255, 255, 0.12) 0px 6px 12px 0px, rgba(8, 8, 8, 0.2) 0px 1px 2px 0px, rgba(8, 8, 8, 0.08) 0px 4px 4px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Rippling | Uses a dark hero section with vibrant accent colors against mostly white content areas, similar font choices for headings and body, and a clean, spacious layout. |
| Webflow | Features a distinct branding typeface for headlines combined with a sans-serif for body text, generous white space, and clear, functional UI components with a modern aesthetic. |
| Intercom | Employs deep, moody brand colors in hero sections, balanced with expansive light surfaces, and a strong emphasis on clear product screenshots and minimal UI design. |
| Monday.com | Uses a vibrant, diverse accent palette against a largely neutral background, with generously rounded elements and an emphasis on visual clarity and approachable design. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #221437
background: #f8f5ff
border: #e2e2e2
accent: #ff7aba
primary action: #793cfb (filled action)

Example Component Prompts:
Create a primary call to action button: background #793cfb, text #ffffff, padding 5px 36px, radius 999px, 'Get a demo' label.
Create a ghost button: background transparent, text #221437, border #221437, padding 0px, radius 999px, 'Watch customer story' label.
Create a default content card: background #ffffff, padding 42px, radius 24px, no shadow.
Create an input field: background #ffffff, text #221437, border rgba(34, 14, 54, 0.08), radius 999px, padding 8px 12px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519440017-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519440017-thumb.jpg |
