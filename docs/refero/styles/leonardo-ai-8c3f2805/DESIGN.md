# Leonardo.ai — Refero Style

- Refero URL: https://styles.refero.design/style/8c3f2805-dfce-4edd-8a9c-946bee4f1cff
- Site URL: https://leonardo.ai
- ID: 8c3f2805-dfce-4edd-8a9c-946bee4f1cff
- Theme: dark
- Industry: ai
- Created: 2026-04-30T00:13:09.580Z
- Ranks: newest: 866, popular: 72, trending: 52

> Luminous Digital Void: vibrant hues punching through deep darkness.

## Description

Leonardo.Ai evokes a luminous digital void, where vibrant hues punch through deep darkness. Typography is bold and oversized, often warping or stacked for dramatic effect, suggesting a world of limitless creation. Interface elements are primarily ghosted or outlined, allowing the rich generative imagery and expressive text to dominate, with solid accents used sparingly for key interactions. The system maintains a high contrast, dark-mode default, relying on the interplay of black canvas, bright white text, and a focused palette of vivid, single-color accents for points of interest.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #000000 | neutral | Primary page background, high-contrast text color on white surfaces, shadow base |
| Ghostly Gray | #e5e5e5 | neutral | Subtle borders, dividers, secondary ghost button borders, and input outlines. Provides minimal structural definition without asserting strong presence |
| Off-Black Text | #0a0a0a | neutral | Text on light surfaces, also appearing as link color on dark backgrounds, suggesting a subtle tonal shift from pure black; Background gradient for sections, providing a smooth transition from deep black |
| Pure White | #ffffff | neutral | Primary text color against dark backgrounds, filled button backgrounds, active navigation elements |
| Subtle Surface | #353535 | neutral | Elevated card backgrounds, differentiated from the main background without introducing significant lightness |
| Muted Ash | #999999 | neutral | Secondary text, descriptive elements, inactive link states. Reduces visual hierarchy |
| Luminous Green | #03e65b | brand | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content |
| Deep Violet | #6e60ee | brand | Violet wash for highlight backgrounds, decorative bands, and soft emphasis behind content. |
| Electric Yellow | #ffc533 | brand | Secondary accent for categorization, highlights, and occasional decorative elements. Creates visual energy |
| Vivid Crimson | #ff3386 | brand | Tertiary accent, often paired with other vivid colors for visual interest or to denote specific categories. Used judiciously |
| Sunset Red | #ff5d4b | brand | A warmer red accent, similar in use to Vivid Crimson for visual variety and categorization |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| canvaSans | system-ui, sans-serif | 400, 500, 700 | 10px, 12px, 14px, 16px, 18px, 19px | 1.10, 1.15, 1.20, 1.25, 1.33 | Primary legible text for body content, UI labels, links, and navigation. Its consistent weight range and neutral tone support the more expressive display fonts. |
| leoSans | Georgia, serif | 500, 800, 900 | 14px, 22px, 34px, 35px, 39px, 44px, 45px, 48px, 50px, 51px, 59px, 65px, 66px, 68px, 75px, 76px, 78px, 79px, 85px, 86px, 90px, 98px, 165px | 0.80, 0.85, 0.90, 0.93, 1.00, 1.25 | Bold, condensed display typeface used for all major headings and artistic text. Its varied weights and negative letter-spacing create a distinct, authoritative, and slightly aggressive feel. The large sizes and tight tracking are a signature element. |
| ufficioDisplay | serif | 500 | 34px | 0.92 | Specialized display face for specific, highly stylized heading elements. Its specific 34px size with tight letter spacing creates a unique, impactful visual identity for specific marketing text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.1 | 0 |
| body | 14 | 1.2 | 0 |
| subheading | 18 | 1.25 | 0 |
| heading-sm | 22 | 0.8 | -0.22 |
| heading | 39 | 0.9 | -0.78 |
| heading-lg | 59 | 0.85 | -1.18 |
| display | 165 | 0.8 | -3.3 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "270px",
    "cards": "8.4375px",
    "buttons": "60px"
  },
  "elementGap": "7-10px",
  "sectionGap": "34-37px",
  "cardPadding": "17-20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Pill Button

**Role:** Secondary action button for navigation or tertiary interactions.

Background #000000 (transparent), text #ffffff, border 1px solid #ffffff, 60px radius. Padding 6.75px vertical, 20.25px horizontal. The extensive radius creates a pill shape.

### Filled Pill Button (Light)

**Role:** Primary action button, high contrast.

Background #ffffff, text #000000, 60px radius. Padding 6.75px vertical, 20.25px horizontal. Used for prominent calls to action.

### Icon-only Button

**Role:** Navigation or small interactive elements where size is minimal.

Background transparent, text #ffffff, no border, 0px radius. No internal padding, relying on icon size for visual area.

### Horizontal Tab Button

**Role:** Segmented control for filtering or switching views.

Background transparent, text #ffffff, right-aligned, 60px radius for specific end caps. Used within a group, often with 0px padding as part of a larger component.

### Basic Content Card

**Role:** Container for secondary content like descriptions or detailed information.

Background #353535, 8.4375px radius, no shadow. Padding 20.25px on all sides. Used for structured textual content.

### Accent Product Card

**Role:** Visually distinct card for showcasing featured items or categories.

Background uses vivid brand colors like #03e65b or #ffc533, 20.4375px radius, no shadow. Padding 16.875px on all sides. These variations bring saturated color to sections.

### Content Badge

**Role:** Label or tag for categorization.

Background transparent, text #ffffff, 0px radius. Used for small textual indicators.

## Do's

- Always use Midnight Void (#000000) for page backgrounds to maintain the deep, dark aesthetic.
- Utilize Pure White (#ffffff) as the primary text color on dark backgrounds for legibility and visual pop.
- Apply LeoSans for all headlines and display text, using extensive letter-spacing adjustments (e.g., -0.0200em for large sizes) to achieve its distinct, compressed look.
- Employ Ghostly Gray (#e5e5e5) for all non-interactive borders, including ghost buttons and dividers, to maintain a subtle structure against dark surfaces.
- Reserve Luminous Green (#03e65b) and Deep Violet (#6e60ee) for distinct accent roles like active states, critical highlights, and brand iconography.
- Use 60px border radius for interactive elements like buttons to achieve a strong pill-like, accessible shape.
- Implement the linear-gradient(rgb(10, 10, 10) 0%, rgba(37, 37, 37, 0.65) 100%) for contained sections that need a softer, slightly varied background from the pure black canvas.

## Don'ts

- Avoid using multiple accent colors in close proximity; instead, let a single accent color make its statement.
- Do not introduce light gray backgrounds for content sections; maintain the dark theme by using Subtle Surface (#353535) for elevated cards.
- Refrain from using default browser link styles; ensure all links use canvaSans and either Pure White (#ffffff) or Muted Ash (#999999) with appropriate hover states.
- Do not use subtle shadows for elevation; the system relies on solid background color shifts for hierarchy.
- Never use `canvaSans` for headlines; its purpose is functional readability, not expressive display.
- Avoid generic rectangular buttons; all prominent buttons should adopt the distinct 60px pill radius.
- Do not introduce large amounts of whitespace around tightly tracked headlines; they are designed to command dense visual space.

## Layout

The page primarily employs a full-bleed layout, where the dark background extends to the viewport edges. The hero section is characterized by oversized, warped typographic elements laid out in 3D perspective, making a bold statement. Content sections below often feature a centered stack text block followed by image-heavy layouts – frequently a grid of cards or alternating text+visual sections. Vertical rhythm is governed by distinct section gaps, creating clear breaks. Navigation is a minimalist top bar, sticky at some breakpoints, with ghosted menu items and prominent 'Log in' and 'Tutorial' buttons.

## Imagery

The imagery leans heavily on highly creative, often abstract or fantastical AI-generated art, product imagery, and stylized photography. These visuals are typically contained within cards with sharp or slightly rounded corners, presented as showcases rather than integrated into the background. The treatment is direct: full-color, high-impact visuals without heavy masking or complex overlaps. Icons are generally minimalist, outlined, and monochromatic, with the occasional full-color brand icon, acting as functional elements that don't compete with the generative art.

## Similar Brands

| Business | Why |
| --- | --- |
| Midjourney | Similar focus on AI-generated visuals, dark theme, and high-impact hero sections with generative art. |
| RunwayML | Explores a dark-mode interface with vibrant accent colors in the creative AI space, emphasizing visually rich generative output. |
| Stability AI | Shares a preference for dark interfaces with strong typographic statements and a focus on AI creativity. |
| Framer | Employs an often dark-themed, UI-focused aesthetic with strong, distinct typography and selective use of color for interaction. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #e5e5e5
accent: #6e60ee
primary action: #ffffff (filled action)

Example Component Prompts:
1. Create a Hero Headline: 'YOUR IDEAS YOURS TO CREATE' using `leoSans` weight 900 at 165px, color #6e60ee, letter-spacing -3.3px, on a Midnight Void (#000000) background. Ensure 0.8 line height.
2. Create a Ghost Outlined Button: 'Start now' using `canvaSans` weight 400 at 16px, text color #ffffff, background transparent, border 1px solid #ffffff, and 60px border radius. Apply 6.75px vertical and 20.25px horizontal padding.
3. Create an Accent Product Card: displaying generative art. Set background to Luminous Green (#03e65b), 20.4375px border radius, with 16.875px padding. Inside, place a 'Product Title' using `canvaSans` weight 700 at 19px, color #0a0a0a.
4. Create a Secondary Text Link: 'Learn more' using `canvaSans` weight 400 at 14px, color Muted Ash (#999999), on a Midnight Void (#000000) background.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507959924-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507959924-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8c3f2805-dfce-4edd-8a9c-946bee4f1cff-1777581526440-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8c3f2805-dfce-4edd-8a9c-946bee4f1cff-1777581526440-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8c3f2805-dfce-4edd-8a9c-946bee4f1cff-1777581526440-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8c3f2805-dfce-4edd-8a9c-946bee4f1cff-1777581526440-preview-detail-poster.jpg |
