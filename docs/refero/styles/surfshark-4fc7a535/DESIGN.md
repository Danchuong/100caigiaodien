# Surfshark — Refero Style

- Refero URL: https://styles.refero.design/style/4fc7a535-3c99-4ffe-8365-7d025d33274e
- Site URL: https://surfshark.com
- ID: 4fc7a535-3c99-4ffe-8365-7d025d33274e
- Theme: mixed
- Industry: other
- Created: 2026-04-30T00:47:50.547Z
- Ranks: newest: 695, popular: 878, trending: 769

> Animated aquatic security

## Description

Surfshark's design system projects a dynamic, secure, and user-friendly online presence. It balances informative content with clear calls to action, leveraging high-contrast typography against clean achromatic surfaces. A vibrant red accent color signifies primary interactions, while a teal tone highlights key data points. Asymmetric large radii on cards and a distinct, rounded button style add a modern, approachable edge to the otherwise structured layout, creating an engaging yet trustworthy feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #16191c | neutral | Page backgrounds for dark sections, card surfaces, important text |
| Stormy Night | #1e2327 | neutral | Slightly darker secondary background for subtle depth in dark sections |
| Deep Graphite | #393e41 | neutral | Subtle border colors, secondary text in dark contexts, icon fills |
| Charcoal Grey | #5b6065 | neutral | Muted body text, placeholder text in inputs, decorative elements |
| Light Grey | #bfbfc0 | neutral | Hairline borders, disabled text, subtle divider lines |
| Silver Mist | #dadadd | neutral | Input borders, light dividers, background of neutral badges |
| Cloud White | #f9f9f9 | neutral | Default page background, light card surfaces |
| Pure White | #ffffff | neutral | Elevated surfaces, component backgrounds, primary text in dark contexts |
| Primary Black | #000000 | neutral | Primary text on light backgrounds, strong borders |
| Shark Red | #fa3556 | brand | Red action color for filled buttons, selected navigation states, and focused conversion moments |
| Ocean Teal | #1ebfbf | accent | Teal outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Harvest Gold | #ffc200 | accent | Promotional banners, special offers, secondary call to action backgrounds — adds warmth and celebratory feel |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 600, 700 | 12px, 14px, 16px, 18px, 24px, 32px, 40px, 48px, 60px | 1.00, 1.07, 1.14, 1.15, 1.21, 1.30, 1.33, 1.50, 1.67, 1.71, 1.75 | The primary font for all textual elements. Its strong, sans-serif character supports both impactful headlines and legible body text across various sizes and weights. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.71 | 0.204 |
| body-sm | 14 | 1.71 |  |
| body | 16 | 1.67 |  |
| subheading | 18 | 1.5 |  |
| heading-sm | 24 | 1.33 |  |
| heading | 32 | 1.21 |  |
| heading-lg | 40 | 1.15 |  |
| display | 48 | 1.14 |  |

## Spacing & Shape

```json
{
  "radius": {
    "hero": "64px",
    "cards": "48px",
    "links": "8px",
    "buttons": "12px",
    "default": "32px"
  },
  "elementGap": "4px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Critical call to action.

Filled button with Shark Red (#fa3556) background, Pure White (#ffffff) text, and a 12px border-radius. Padding of 12px vertical, 16px horizontal.

### Accent Promotion Button

**Role:** Highlighting special offers or deals.

Filled button with Harvest Gold (#ffc200) background, Primary Black (#000000) text, and a 8px border-radius. Padding of 12px vertical, 32px horizontal.

### Ghost Navigation Button

**Role:** Secondary navigation or interactive elements.

Transparent background, Charcoal Grey (#5b6065) text and a 0px border-radius. Padding of 12px vertical, 32px horizontal.

### Text Link Button

**Role:** Minimal interactive elements without strong visual emphasis.

Transparent background, Primary Black (#000000) text, no border or radius. Padding of 0px.

### Dark Hero Card

**Role:** Prominent information blocks on dark backgrounds.

Card with Midnight Ink (#16191c) background and an asymmetric 48px 0px 0px border-radius. No padding applied by default, intended for content to define internal spacing.

### Light Feature Card

**Role:** Content presentation on light backgrounds.

Card with Cloud White (#f9f9f9) background and a 48px border-radius. No padding applied by default, intended for content to define internal spacing.

### Form Input Field

**Role:** User input fields.

Transparent background, Silver Mist (#dadadd) border, 0px border-radius. Pale text color. Padding 4px vertical, 8px left, 28px right.

## Do's

- Use Shark Red (#fa3556) exclusively for primary calls to action to ensure visual hierarchy and prompt decisive interaction.
- Apply Inter font family with weights 400, 600, or 700. Do not use other weights.
- Utilize a 12px border-radius for all filled buttons to maintain a consistent friendly yet modern interaction style.
- Ensure headings use a generous line-height from the type scale values to improve readability and visual breathing room.
- Maintain high contrast (AAA minimum) for all text on background pairings, especially for critical information.
- Employ the 48px asymmetric radius (48px 0px 0px) for cards on the left edge of the screen, mirroring the brand's design language.
- Use Ocean Teal (#1ebfbf) specifically for highlighting key figures like prices or data points, not for interactive elements.

## Don'ts

- Do not use Harvest Gold (#ffc200) for primary action buttons; reserve it for distinct promotional banners or secondary accents.
- Avoid arbitrary border-radius values; always refer to the defined spacing.radius tokens (e.g., 48px for cards, 12px for buttons).
- Do not introduce new typefaces or weights outside of the specified Inter family and its defined weights.
- Refrain from using color for purely decorative purposes if it doesn't align with brand, accent, or semantic roles.
- Do not use the transparent Ghost Navigation Button style as a primary call to action, as it lacks sufficient visual weight.
- Do not stretch or distort imagery; maintain original aspect ratios and ensure crisp presentation.
- Avoid using a pageMaxWidth; the page content stretches fluidly, but sections may be contained internally.

## Layout

The page structure is full-bleed, adapting to the viewport width, with some sections containing content within a conceptual maximum width via internal left/right padding. The hero sections often feature large, impactful visuals on a dark background with centered, bold headlines. Subsequent sections alternate between light and dark themes, creating visual rhythm. Content is typically arranged in clear, stacked blocks or alternating text-left/image-right (or vice-versa) two-column layouts. Navigation is a persistent top bar featuring the brand logo, primary navigation links, and a prominent call-to-action button, ensuring constant access to key areas. Sections are generously spaced vertically, contributing to a comfortable density.

## Imagery

The visual language for imagery is a mix of high-quality product renders, dark-mode focused lifestyle photography, and clean, geometric line icons. Photography tends to be dark and moody with a warm glow, often showing individuals using devices in comfortable, ambient settings, emphasizing privacy and security. Product visuals are crisp and isolated, often placed within abstract or stylized contexts (like the jelly cake). Icons are outlined, conveying functionality without visual clutter, with occasional fills for emphasis. Imagery serves both decorative atmosphere within dark sections and explanatory content within light sections.

## Similar Brands

| Business | Why |
| --- | --- |
| NordVPN | Focus on cybersecurity, dark main product UIs with occasional vibrant accents, and prominent call-to-action buttons. |
| ExpressVPN | Similar emphasis on a secure, clean aesthetic, strong branding through color, and straightforward, action-oriented layouts. |
| ProtonVPN | Combination of dark and light sections, geometric card shapes, and a professional, trustworthy visual tone for security products. |
| Tailscale | Fluid layouts, a mix of text and visual content to explain complex tech, and a clean, modern aesthetic with defined accent colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f9f9f9
border: #dadadd
accent: #1ebfbf
primary action: #fa3556 (filled action)

Example Component Prompts:
Create a Primary Action Button: #fa3556 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510037700-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510037700-thumb.jpg |
