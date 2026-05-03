# Apple — Refero Style

- Refero URL: https://styles.refero.design/style/aecac5da-f397-4ddf-b71f-de1efc434cb8
- Site URL: https://www.apple.com
- ID: aecac5da-f397-4ddf-b71f-de1efc434cb8
- Theme: light
- Industry: ecommerce
- Created: 2026-04-29T00:45:25.088Z
- Ranks: newest: 887, popular: 747, trending: 591

> Gallery White Precision

## Description

Apple's design system feels like precision engineering in a luminous white gallery. The interplay of crisp neutrals establishes a bright, expansive canvas, punctuated by a vibrant, yet restrained, blue as the sole chromatic accent. Sharp typography with subtle letter spacing and generous negative space conveys a sense of curated order, while highly rounded button capsules provide a soft, approachable contrast to the otherwise rigorous structure.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Global page background, default surface. |
| Porcelain | #f5f5f7 | neutral | Secondary background color for sections and footers, creating subtle elevation shifts. |
| Graphite | #1d1d1f | neutral | Primary text color for headlines, body copy, and most interactive elements, providing high contrast against light backgrounds. |
| Cool Gray | #707070 | neutral | Secondary text color for descriptive text, muted navigation items, and less prominent information. |
| Charcoal Black | #000000 | neutral | Iconography, strong dividers, and occasionally for high-emphasis headings or links. |
| Subtle Frost | #f4f8fb | neutral | Observed in other fill, button color, other backgroundColor. Extracted usage does not support a distinct primary control color. |
| Border Gray | #e2e2e5 | neutral | Subtle borders and dividers, indicating UI separation without being visually heavy. |
| Electric Blue | #0071e3 | brand | Call-to-action buttons, active states, and focus indicators — the primary interactive accent. |
| Link Blue | #0066cc | accent | Body text links and ghost button borders, providing a distinct interactive cue. |
| Highlight Blue | #2997ff | accent | Hover states for links and icons, offering a brighter, more vivid interactive feedback. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SF Pro Display | system-ui | 700 | 21px, 28px, 40px, 56px | 1.07, 1.10, 1.14, 1.19 | Prominent display headings, imparting significance with precise tracking. |
| SF Pro Display | system-ui | 400 | 21px, 28px, 40px, 56px | 1.07, 1.10, 1.14, 1.19 | Large headings and critical product names, balancing legibility with visual impact. |
| SF Pro Text | system-ui | 600 | 12px, 14px, 17px, 18px, 24px, 26px, 34px, 44px | 1.00, 1.18, 1.24, 1.29, 1.33, 1.47, 1.50, 2.12, 2.41 | Section titles, subheadings, and emphasized text segments, providing structural hierarchy with minimal weight. |
| SF Pro Text | system-ui | 400 | 12px, 14px, 17px, 18px, 24px, 26px, 34px, 44px | 1.00, 1.18, 1.24, 1.29, 1.33, 1.47, 1.50, 2.12, 2.41 | Standard body text, descriptive labels, and form inputs, optimized for reading at various sizes. |
| SF Pro Text | system-ui | 300 | 12px, 14px, 17px, 18px, 24px, 26px, 34px, 44px | 1.00, 1.18, 1.24, 1.29, 1.33, 1.47, 1.50, 2.12, 2.41 | Fine print, legal disclaimers, and secondary metadata, maintaining legibility at small sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 2.41 | -0.13 |
| body-sm | 14 | 1.29 | -0.19 |
| subheading | 18 | 1.33 | -0.18 |
| heading | 24 | 1.19 | -0.26 |
| heading-lg | 40 | 1.1 | 0.44 |
| display | 56 | 1.07 | -0.56 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "999px",
    "cards": "0px",
    "buttons": "980px",
    "formElements": "11px"
  },
  "elementGap": "10px",
  "sectionGap": "70-114px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button

Solid Electric Blue background (#0071e3) with Canvas White text, featuring a 'pill' shape with 980px border-radius and 11px vertical, 21px horizontal padding.

### Ghost Button - Blue Text

**Role:** Secondary action button

Transparent background with Link Blue text (#0066cc), rounded with a 980px border-radius and 11px vertical, 21px horizontal padding.

### Default Header Button

**Role:** Navigation button

Transparent background with Graphite text (#1d1d1f), no border-radius (0px), and no explicit padding, relying on inherent text spacing for interaction.

### Region Selector Button

**Role:** Informational button

Subtle Frost background (#f4f8fb) with Graphite text (#1d1d1f), slightly rounded with an 11px border-radius, and 0px vertical, 14px horizontal padding.

### Standard Content Card

**Role:** Content container

Transparent background with 0px border-radius and no box shadow, designed to house content seamlessly within the layout without explicit visual framing. Padding is 0px.

### Elevated Image Card

**Role:** Promotional content card

Transparent background with 0px border-radius, featuring a subtle shadow (rgba(0, 0, 0, 0.22) 3px 5px 30px 0px) for depth, typically containing product imagery.

### Top Navigation Link

**Role:** Primary navigation item

Transparent background with Graphite text (#1d1d1f) at SF Pro Text Regular 12px, with generous 8px vertical padding and 0px horizontal padding, to allow ample tap target.

### Footer Section Heading

**Role:** Information architecture heading

Graphite text (#1d1d1f) at SF Pro Text Semibold 12px, providing clear categorization within the footer with a 5px top margin.

## Do's

- Use Electric Blue (#0071e3) exclusively for primary call-to-action buttons to maintain visual focus.
- Apply 980px border-radius to all interactive buttons for a consistent rounded aesthetic.
- Prioritize SF Pro Display for large, impactful headlines, using its specific letter spacing values like -0.56px at 56px.
- Maintain a clear visual hierarchy with Graphite (#1d1d1f) for main text and Cool Gray (#707070) for secondary information.
- Use Canvas White (#ffffff) as the dominant background color to ensure a bright and expansive feel.
- Separate content sections with subtle background shifts to Porcelain (#f5f5f7), rather than heavy dividers or shadows.
- Ensure a horizontal padding of 21px for all primary action buttons for comfortable sizing.

## Don'ts

- Do not use saturated blues for non-interactive elements; reserve them for direct user engagement.
- Avoid using custom shadows or borders on standard content cards, as they are meant to be seamless.
- Do not vary letter spacing for body text; maintain the specified SF Pro Text tracking values for legibility.
- Refrain from using color to indicate states like success or error; rely on iconography or structured messaging instead.
- Do not introduce additional font families; adhere strictly to SF Pro Text and SF Pro Display.
- Avoid small, precise radii (e.g., 4px) for interactive elements; stick to the highly rounded 980px for buttons or 11px for contained inputs.
- Never use excessive decorative elements or heavy gradients that would detract from the clean, systematic aesthetic.

## Layout

The page structure uses a contained, centered layout for most content, with a max-width for textual information, but product showcase sections frequently break out into full-bleed photography. The hero section often combines a centered headline with full-width product imagery. Section rhythm is created through alternating a base Canvas White (#ffffff) with Porcelain (#f5f5f7) background bands, maintaining consistent vertical spacing. Content is primarily arranged in single-column stacks for main headlines and descriptive text, often transitioning to a two-column text-left/image-right or image-left/text-right pattern for feature presentations. Navigation is a sticky top bar with clearly segmented product categories and utility icons on the far right.

## Imagery

The visual language predominantly features high-quality product photography, often isolated on pure white or light grey backgrounds to showcase detail without distraction. Photography is usually full-bleed across sections to immerse the user. Iconography is monochromatic and minimalist, often thin-stroked, serving as UI enhancers rather than decorative elements. The overall impression is one of product-focused clarity and premium presentation, conveying a sense of aspiration and innovation through the products themselves.

## Similar Brands

| Business | Why |
| --- | --- |
| Google | Dominant white/light backgrounds with a singular, vivid accent color used sparingly for interactive elements and highlights. |
| Stripe | Clean, spacious layouts with a focus on sharp typography, subtle neutral palettes, and deliberate use of a single accent color for calls to action. |
| Figma | Emphasis on system fonts (like SF Pro or similar), clear information hierarchy, and a restrained use of color to define interactive states, all within a stark white or light gray UI. |

## Custom Sections

### Agent Prompt Guide

primary action: #0071e3 (filled action)
Create a Primary Action Button: #0071e3 background, #f4f8fb text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423503334-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777423503334-thumb.jpg |
