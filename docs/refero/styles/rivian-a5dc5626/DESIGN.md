# Rivian — Refero Style

- Refero URL: https://styles.refero.design/style/a5dc5626-1103-42e3-9edb-a6d52fb9a210
- Site URL: https://rivian.com
- ID: a5dc5626-1103-42e3-9edb-a6d52fb9a210
- Theme: light
- Industry: other
- Created: 2026-02-16T13:21:01.000Z
- Ranks: newest: 1176, popular: 333, trending: 396

> Subtle Power, Precision Engineering.

## Description

This system evokes a sense of understated power and refined utility, much like the vehicles it represents. It balances a strong, nearly achromatic palette with crisp typography and subtle interactive accents. The aesthetic is anchored by deep blacks and bright whites, creating high contrast that feels purposeful rather than stark, while carefully articulated letter-spacing at larger type sizes adds a layer of precision. Rounded corners are reserved almost exclusively for interactive elements, softening points of engagement within an otherwise clean, angular visual language.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | brand | Primary text, interactive backgrounds, strong accents. |
| Arctic White | #ffffff | brand | Page backgrounds, card surfaces, inverted text. |
| Slate Gray | #151515 | neutral | Secondary text, subtle background fills, borders. |
| Cloud Drifter | #f2f2f2 | neutral | Subtle background surfaces, hover states for neutrals. |
| Ash Concrete | #e5e7eb | neutral | Divider lines, subtle borders, background elements. |
| Dark Asphalt | #212121 | neutral | Input backgrounds, elevated background elements. |
| Chrome Accent | #cfd0d0 | neutral | Subtle UI elements, non-semantic highlights. |
| Sunbeam Yellow | #ffac00 | accent | Primary CTA background, active nav highlights — a burst of energy against the monochrome. |
| Forest Green | #629b5c | accent | Secondary accent for specific interactive elements. |
| Desert Orange | #e84826 | accent | Tertiary accent for specific interactive elements. |
| Ocean Blue | #77afd8 | accent | Quaternary accent for specific interactive elements. |
| Sapphire Glow | #0066ff | accent | Decorative illustration fill, subtle UI flourishes. |
| Vivid Green | #7af400 | accent | Decorative illustration fill, subtle UI flourishes. |
| Dark Forrest Gradient | #252826 | brand | Background for hero sections, creating dramatic depth. |
| Horizon Fade Gradient | #f2f2f2 | neutral | Section background, suggesting open sky or subtle elevation. |
| Abyss Blue Gradient | #000000 | brand | Deep background for impactful moments, conveying sophistication. |
| Success | #4a8231 | semantic | Semantic color for positive feedback. |
| Error | #dc3127 | semantic | Semantic color for critical feedback. |
| Warning | #d58103 | semantic | Semantic color for cautionary notifications. |
| Info | #005e7d | semantic | Semantic color for informational messages. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Adventure | system-ui, sans-serif | 400, 500, 600 | 10px, 11px, 12px, 14px, 16px, 20px, 24px, 32px, 36px, 44px, 56px, 72px, 120px | 0.93, 1.00, 1.07, 1.09, 1.11, 1.13, 1.14, 1.17, 1.20, 1.25, 1.33, 1.40, 1.43, 1.50, 1.55 | The primary typeface for all content. Its range of weights and optical adjustments via letter-spacing at larger sizes ensure legibility and a distinct high-fidelity feel, from small captions to large display headings. The precise letter-spacing at display sizes creates a signature tight, technical aesthetic. |
| Liga | system-ui, sans-serif | 500 | 360px | 1.00 | Reserved for monumental display headings, likely large brand statements. The extreme size and specific letter-spacing create an impactful, almost structural visual element. |
| Sohne | system-ui, sans-serif | 500 | 12px | 1.33 | Used for specific utility or annotation text, possibly meta-information, offering a clean, unobtrusive presence at small sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.55 |  |
| heading | 20 | 1.25 | -0.2 |
| heading-lg | 24 | 1.2 | -0.24 |
| display | 32 | 1.17 | -0.672 |
| display-lg | 36 | 1.14 | -0.9 |
| display-xl | 44 | 1.13 | -1.364 |
| display-xxl | 56 | 1.11 | -2.016 |
| display-3xl | 72 | 1.09 | -3.024 |
| display-4xl | 120 | 1.07 | -5.4 |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "4px",
    "buttons": "40px",
    "general": "8px"
  },
  "elementGap": "4-28px",
  "sectionGap": "24-48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Hero Promo Banner with CTA Buttons



### Vehicle Info Card — R1S



### Location Selector Dropdown



### Primary Filled Button - Arctic White

**Role:** Primary Call-to-Action

Button with `Arctic White` (#ffffff) background, `Midnight Ink` (#000000) text, `Ash Concrete` (#e5e7eb) border, 40px border radius, 8px vertical padding, 16px horizontal padding. Prominent and approachable.

### Primary Filled Button - Midnight Ink

**Role:** Inverted Primary Call-to-Action

Button with `Midnight Ink` (#000000) background, `Arctic White` (#ffffff) text, `Ash Concrete` (#e5e7eb) border, 40px border radius, 8px vertical padding, 16px horizontal padding. Used against lighter backgrounds for high contrast.

### Ghost Button - Arctic White

**Role:** Secondary Call-to-Action

Transparent background button with `Arctic White` (#ffffff) text, no visible border, 9999px border radius (pill shaped), 8px vertical padding, 12px horizontal padding. Subtle and contextual interaction.

### Ghost Button - Midnight Ink

**Role:** Secondary Call-to-Action on light backgrounds

Transparent background button with `Midnight Ink` (#000000) text, no visible border, 9999px border radius (pill shaped), 8px vertical padding, 12px horizontal padding. Subtle and contextual interaction.

### Link Button

**Role:** Tertiary Call-to-Action

Transparent background button with `Slate Gray` (#151515) text, no border radius (sharp), 12px vertical padding, 16px horizontal padding. Functions as a text link with button-like padding.

### Default Card

**Role:** Content Grouping

Card with transparent background, no border radius, no box shadow, no padding. Used for grouping content without adding additional visual weight.

### Login Input Field

**Role:** Data Entry

Input with `Dark Asphalt` (#212121) background, `Arctic White` (#ffffff) text, `Arctic White` (#ffffff) border, 4px border radius, 20px top padding, 16px horizontal padding, 0px bottom padding. Suggests a dark, secure input experience.

## Do's

- Prioritize 'Adventure' font for all text, applying specific letter-spacing for display sizes 20px and above, ensuring a precise, technical feel.
- Use `Midnight Ink` (#000000) for primary text on `Arctic White` (#ffffff) backgrounds, and `Arctic White` (#ffffff) text on `Midnight Ink` (#000000) backgrounds for maximum contrast and readability.
- Apply a 40px border radius to all primary and secondary buttons, crafting an approachable, modern form factor.
- Employ the `Sunbeam Yellow` (#ffac00) as the high-visibility accent color for primary call-to-action buttons, creating a deliberate focal point.
- Maintain minimal padding within cards (0px), allowing content to define its own space and emphasizing a clean, unadorned aesthetic.
- Utilize dark backgrounds like `Dark Forrest Gradient` or `Abyss Blue Gradient` for hero sections to create a premium, immersive brand introduction.
- Incorporate subtle, desaturated background colors like `Ash Concrete` (#e5e7eb) and `Cloud Drifter` (#f2f2f2) for section separation while maintaining visual lightness.

## Don'ts

- Do not use box-shadows for elevation; rely on color shifts between surfaces to indicate depth, maintaining a flat, modern impression.
- Avoid generic border radii; use the specified 40px for buttons and 4px for inputs, reserving other radii sparingly for specific elements.
- Do not introduce additional vibrant hues beyond the established accent colors (`Sunbeam Yellow`, `Forest Green`, `Desert Orange`, `Ocean Blue`), maintaining the sophisticated monochromatic base.
- Refrain from heavy text ornamentation like underlines or excessive bolding; the type scale and precise letter-spacing are sufficient for visual hierarchy.
- Do not use generic system fonts; 'Adventure' is critical for brand identity, with 'Liga' for monumental statements and 'Sohne' for microcopy.
- Do not use static header navigation on lighter body content; ensure it appears on a dark background or with an appropriate transparent overlay to match the brand aesthetic.
- Avoid cluttering card or section backgrounds with gradients – use them strategically for dramatic full-width hero or major content blocks only.

## Layout

The page primarily uses a max-width contained layout, approximately 1200-1400px, centered on the screen. Hero sections are exceptions, often full-bleed with dramatic photography or large typography over gradient backgrounds, serving as impactful entry points. Content is typically arranged in balanced two-column layouts featuring text alongside visuals (vehicles), or stacked centered content blocks. Sections are clearly delineated by varied backgrounds (light gray, white, or dark gradients), often creating a subtle alternating rhythm down the page. Navigation is a sticky top bar with clear, minimalist links and distinct accent buttons.

## Imagery

Photography is the dominant visual medium, featuring vehicles in both studio settings (tight product crops on white/gray gradients) and natural, outdoor environments (mountain roads, urban landscapes). The treatment emphasizes the vehicle as the primary subject, often full-bleed or large-scale, conveying capability and lifestyle without explicit human interaction. Photography is high-key in outdoor shots, showcasing clarity and detail, while studio shots lean towards dramatic lighting. Icons are minimal, outlined, and monochromatic, integrated subtly into the UI rather than serving as prominent visual elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Tesla | Shares a focus on clean, high-contrast UI with photography-driven hero sections and minimal use of decorative elements. |
| Lucid Motors | Exhibits a similar premium automotive aesthetic, relying on large-scale vehicle imagery, sophisticated typography, and a restrained color palette. |
| Apple | Uses large type, crisp product photography against clean backgrounds, and a focus on essential UI elements with subtle interactions. |
| Polestar | Employs dark and light achromatic themes with striking vehicle visuals, tight typography, and a premium, engineered feel. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000 (Midnight Ink)
- Background: #ffffff (Arctic White)
- CTA: #ffac00 (Sunbeam Yellow)
- Border: #e5e7eb (Ash Concrete)
- Accent: #ffac00 (Sunbeam Yellow)

### 3-5 Example Component Prompts
1. Create a hero section: full-width, background is `Dark Forrest Gradient` (linear-gradient(rgb(37, 40, 38), rgb(0, 0, 0))). Title 'Choose your own savings' using 'Adventure' font, size 56px, weight 500, #ffffff, letter-spacing -0.036em. Subtext 'For a limited time...' using 'Adventure' font, size 16px, weight 400, #ffffff. Add a 'Primary Filled Button - Arctic White' labeled 'View all offers'.
2. Design a navigation bar: `Arctic White` (#ffffff) background, with `Midnight Ink` (#000000) text for main links ('Vehicles', 'Charging'). Include a 'Primary Filled Button - Sunbeam Yellow' with text 'Demo drive', 'Adventure' font, size 14px, weight 600, 40px border radius, 8px vertical padding, 16px horizontal padding.
3. Implement a feature card: `Default Card` styling (transparent background, no shadow/radius/padding). Heading 'Meet R2' using 'Adventure' font, size 44px, weight 500, #000000, letter-spacing -0.031em. Body text 'Explore the lineup and reserve yours today.' using 'Adventure' font, size 20px, weight 400, #000000.
4. Create an input field: for login, use `Dark Asphalt` (#212121) background, `Arctic White` (#ffffff) text, `Arctic White` (#ffffff) border, 4px border radius, 20px top padding, 16px horizontal padding, 0px bottom padding. Placeholder text should be 'Adventure' font, size 16px, weight 400, #b8b8b8.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924928279-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924928279-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a5dc5626-1103-42e3-9edb-a6d52fb9a210-1777584403824-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a5dc5626-1103-42e3-9edb-a6d52fb9a210-1777584403824-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a5dc5626-1103-42e3-9edb-a6d52fb9a210-1777584403824-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/a5dc5626-1103-42e3-9edb-a6d52fb9a210-1777584403824-preview-detail-poster.jpg |
