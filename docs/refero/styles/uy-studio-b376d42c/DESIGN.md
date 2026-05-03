# UY Studio — Refero Style

- Refero URL: https://styles.refero.design/style/b376d42c-b2cb-4a52-8cec-ebf19cf1883f
- Site URL: https://www.uy-studio.com
- ID: b376d42c-b2cb-4a52-8cec-ebf19cf1883f
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:14:31.563Z
- Ranks: newest: 410, popular: 887, trending: 790

> Gallery Canvas, Monochromatic Depth

## Description

UY Studio employs a stark, gallery-like aesthetic, using high-contrast neutrals and minimal design elements. The visual system features large type for impactful statements, discreet navigation, and a strong emphasis on product presentation. Borders and typography create structural rhythm, avoiding heavy backgrounds or decorative gradients to foreground content. Components feel austere and understated, relying on subtle line work and precise spacing for definition.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon | #24241f | neutral | Primary text, outline buttons, input borders and labels, navigation accents, subtle surface backgrounds |
| Fog Canvas | #d1d3cf | neutral | Page background, light card surfaces, occasional input fills |
| Ghost White | #e5e5e5 | neutral | Subtle text on darker backgrounds, light button borders |
| Obsidian | #333333 | neutral | Alternative button background for emphasized actions |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GP | Arial | 400 | 13px, 15px, 16px, 30px, 48px | 1.10, 1.13, 1.20, 1.37, 1.38, 1.41, 1.50, 1.77 | Primary typeface for all UI elements, including headings, body text, and navigation. Its varied letter-spacing creates a sense of gravitas for large titles and subtle refinement for smaller text. |
| GTStandard-M | Helvetica Neue | 400 | 15px | 1.50 | Secondary typeface, appears to be used for specific informational elements or branding. Provides a slightly different texture without diverging from the overall monochromatic aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.77 | 0.45 |
| heading | 30 | 1.38 |  |
| display | 48 | 1.13 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "input": "3px"
  },
  "elementGap": "13px",
  "sectionGap": "143px",
  "cardPadding": "13px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Header Button

**Role:** Navigation and secondary actions in the header

Text in Carbon (#24241f) on a transparent background, with 0px padding and radius. Relies purely on typography for definition.

### Filled Action Button

**Role:** Primary call to action button

Background Obsidian (#333333), text Ghost White (#e5e5e5), with 10px vertical and 30px horizontal padding, and 0px border-radius. Provides a strong visual cue through solid fill.

### Product Input Field

**Role:** Standard text input field

Transparent background, Carbon (#24241f) text, with an implicit 1px bottom border in Carbon, 1px top/bottom padding and 12px right padding. Border-radius is 3px for subtle softening.

### Footer Input Field

**Role:** Input field in the footer for subscribing

Transparent background, Fog Canvas (#d1d3cf) text, with a 1px border in Fog Canvas at the bottom. Padding is 1px top/bottom and 2px left/right, and 3px border-radius.

### Search Input Field

**Role:** Search or filter input field within product listings

White background, Fog Canvas (#d1d3cf) text, with a 1px border in a lighter gray (#d0d0d0) at the bottom. Padding is 1px top/bottom and 2px left/right, and 3px border-radius.

### Product Badge

**Role:** Small informational label or tag

Transparent background, Carbon (#24241f) text, 0px border-radius and 0px padding. Used for minimal, text-only badging.

## Do's

- Use Carbon (#24241f) for all primary text elements, ensuring strong contrast against lighter backgrounds.
- Apply Fog Canvas (#d1d3cf) as the default page and light surface background color.
- Employ the GP typeface at 48px with 1.13 line height and -0.96px letter-spacing for prominent headings to create a declarative statement.
- Define interactive elements such as navigation links with Carbon (#24241f) text and a transparent background, using no padding or borders.
- Apply 0px border-radius to most layout-level components like cards and buttons to maintain a structured, stark aesthetic, except for input fields which use 3px radius.
- Use 1px borders in the primary text color (Carbon, #24241f) or background color (Fog Canvas, #d1d3cf) for subtle delineation of sections and interactive states.
- Maintain a comfortable density with element gaps typically around 13px, creating visual breathing room without appearing sparse.

## Don'ts

- Avoid using highly saturated or chromatic colors; strict adherence to the neutral palette (Carbon, Fog Canvas, Ghost White, Obsidian) is key.
- Do not introduce complex shadow effects or gradients; the design relies on flat surfaces and high contrast for depth.
- Refrain from using border-radius values other than 0px for most primary UI elements, or 3px for inputs, to maintain the architectural precision.
- Do not animate elements with durations outside of the established moderate timing (0.15s, 0.25s, 0.3s) or easing curves.
- Avoid decorative imagery that competes with product photography or overwhelms the minimalist UI; imagery should be contained and functional.
- Do not deviate from the specified GP and GTStandard-M typography families, as they are central to the brand's voice.
- Do not add unnecessary padding or decorative flourishes to buttons; they should remain stark and functional.

## Layout

The page primarily uses a full-bleed layout, particularly in the hero section, with content often centered or spanning the full width. The hero features a large product image with a centrally placed, large-type headline. Subsequent sections often employ a grid system for product display, with columns of equal width and height, maintaining consistent vertical rhythm. There's a minimal use of padding for these product grids, creating a dense, organized presentation. The overall layout balances content density for product listings with generous white space around key marketing messages, such as the footer invitation to 'NEVER MISS A DROP'. Navigation is a sticky top bar, providing persistent access across the site.

## Imagery

The imagery is product-focused photography, presenting items in a clean, staged, and often minimal setting. Products are typically isolated or sparsely arranged on simple surfaces like white tables or concrete, highlighting textures and forms without elaborate backdrops. The color treatment is subdued, natural, and consistent with the achromatic UI, allowing the product's natural hues to emerge. This creates a gallery-like atmosphere, emphasizing product materiality and craftsmanship. Icons, when present, are simple, outlined, and monochromatic, matching the overall UI's understated elegance. Imagery is a primary content driver, occupying significant visual space to showcase products directly.

## Similar Brands

| Business | Why |
| --- | --- |
| Aēsop | Shares a minimalist, neutral color palette and a focus on high-quality product photography with clean typography. |
| COS | Similar stark, architectural presentation of fashion and home goods, with monochromatic design and emphasis on product form. |
| Our Legacy | Also features a raw, unpolished aesthetic with a strong emphasis on photography and a limited color palette, often using dark text on light backgrounds. |
| Studio Nicholson | Exhibits a refined, minimalist aesthetic with thoughtful typography and a subdued color scheme, allowing products to take center stage. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #24241f
background: #d1d3cf
border: #24241f
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary navigation link: text Carbon (#24241f), transparent background, GP typeface at 15px, 1.5 line height, 0px padding and radius. Add a subtle 1px bottom border in Carbon (#24241f) on hover.
2. Create a large hero headline: text Carbon (#24241f), GP typeface at 48px, 1.13 line height, -0.96px letter-spacing, centered on a full-bleed product image.
3. Create a secondary action button: text Ghost White (#e5e5e5), background Obsidian (#333333), GP typeface at 13px, 10px vertical and 30px horizontal padding, 0px border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515248896-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515248896-thumb.jpg |
