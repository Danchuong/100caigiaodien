# Baubauwerk — Refero Style

- Refero URL: https://styles.refero.design/style/dbfeb56b-8802-4166-b51f-714b3cfddb40
- Site URL: https://baubauwerk.com
- ID: dbfeb56b-8802-4166-b51f-714b3cfddb40
- Theme: light
- Industry: design
- Created: 2026-04-30T03:43:28.917Z
- Ranks: newest: 84, popular: 1146, trending: 1123

> Black & White Manifesto

## Description

Baubauwerk presents a stark, high-contrast visual system built on uncompromising black and white. Typography carries the primary visual weight, feeling both academic and modern, with minimal use of color beyond functional roles. Surfaces are flat and unadorned, relying on crisp text and strong compositional lines rather than elevation or gradients. The overall atmosphere is direct, confident, and text-focused, allowing content to take precedence without visual interruption.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, inverse text on dark elements |
| Midnight Black | #000000 | neutral | Primary text, heading text, navigation elements, dark background accents, button backgrounds. Defines the core contrast |
| Ghost Border | #d8d8d8 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Subtle Gray | #9b9b9b | neutral | Muted text, secondary navigation items, and hairline borders for less prominent elements |
| Button Text Gray | #4e4a4a | neutral | Text color for default, non-filled buttons, chosen for readability against white |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Quattrocento Sans | Open Sans | 400, 700 | 14px, 16px, 24px, 30px | 1.25, 1.33, 1.60, 1.71 | Body text, smaller headings, navigation links, and footer content. Its legibility balances the bolder display font. |
| Telegraf | Montserrat | 400, 500 | 14px, 22px, 23px, 25px, 48px, 60px | 1.00, 1.10, 1.60, 1.71 | Dominant display font for large headings, hero text, and key brand statements. Its geometric structure and varying weights create a commanding presence. |
| Roboto | Inter | 400, 700 | 12px | 1.00 | Used specifically for button text at a small size, maintaining crispness and efficiency. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1 |  |
| body-sm | 14 | 1.25 |  |
| body | 16 | 1.33 |  |
| subheading | 22 | 1.1 |  |
| heading | 24 | 1.25 |  |
| heading-lg | 30 | 1.25 |  |
| display | 48 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Action Button

**Role:** Secondary action button for filtering and navigation.

Text in Button Text Gray (#4e4a4a), no background, 1px Ghost Border (#d8d8d8). Padding is 5px top, 20px right, 6px bottom, 20px left. Zero border-radius for sharp, decisive edges.

### Primary Action Button

**Role:** Prominent calls to action.

Solid Midnight Black (#000000) background with Canvas White (#ffffff) text. Padding is 8px top, 13px right, 10px bottom, 13px left. Zero border-radius for a strong, unyielding presence.

### Feature Card

**Role:** Content container for articles or project showcases.

Transparent background with no box shadow and 0px border-radius. Padding is 0px on all sides, allowing content to dictate visual spacing. Borders are applied semantically to elements within the card, not the card itself.

### Category Badge

**Role:** Small, descriptive labels for content.

Transparent background with Midnight Black (#000000) text. Padding is 1px top, 0px right, 0px bottom, 1px left. Zero border-radius, often with 15px top margin for separation.

## Do's

- Prioritize text with Midnight Black (#000000) on Canvas White (#ffffff) for all primary content and actions, ensuring AAA contrast.
- Use Telegraf for all headline-level text (sizes 22px-60px) and Quattrocento Sans for body text (sizes 14px-30px, always with letterSpacing normal).
- Maintain a strict '0px' border-radius for all component corners, reinforcing a sharp and angular aesthetic.
- Implement Ghost Action Buttons with 1px Ghost Border (#d8d8d8) and text color Button Text Gray (#4e4a4a) for secondary interactions.
- Implement Primary Action Buttons with solid Midnight Black (#000000) backgrounds and Canvas White (#ffffff) text for critical interactions.
- Employ consistent 20px padding for element and card spacing, allowing content to breathe without excessive white space.

## Don'ts

- Avoid using saturated or bright colors; the system relies almost exclusively on achromatic tones.
- Do not introduce rounded corners or soft edges; all visual elements should adhere to a strict 0px border-radius.
- Refrain from adding UI shadows or significant elevation; surfaces should remain flat and compositional.
- Do not use generic system fonts when custom fonts Telegraf and Quattrocento Sans are specified; their distinctiveness is key to the brand.
- Avoid decorative gradients or background imagery on UI elements; maintain a clean, text-first presentation.
- Do not deviate from the specified spacing units; consistent element and card spacing is crucial for structure.

## Layout

The page structure is a contained layout, with content centered within a maximum width that supports a clear columned approach. The hero section features a prominent, centered headline with a minimal visual accent (the Berlin bear graphic). Sections often alternate between content blocks and image galleries. A consistent vertical rhythm is maintained with specific section and element gaps. Navigation is a simple top bar with left-aligned links and a right-aligned language toggle. Content often uses 2 or 3-column grids for feature cards or blog posts, creating a structured, information-dense display.

## Imagery

This system primarily uses embedded functional imagery: product screenshots, tightly cropped visual examples of work, and small profile pictures. Photography is typically high-contrast, often with a stark, journalistic quality and a focus on the subject. Illustrations, if present, are minimal and flat. Icons are generally filled and monochromatic. Imagery serves as explanatory content or showcases product/portfolio, rather than decorative atmosphere, and is often presented in small, contained squares.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Strong typographic focus, black and white palette, and grid-based content presentation. |
| Pentagram | Emphasis on content, flat design surfaces, and minimal color with strong typographic hierarchy. |
| Manual (design studio) | High-contrast visuals, sharp edges, and a clean, direct approach to UI without embellishment. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #000000, background: #ffffff, border: #d8d8d8, primary action: no distinct CTA color

Example Component Prompts:
Create a hero section: Canvas White background. Headline 'Hey, we’re Baubauwerk' at 48px Telegraf, weight 400, Midnight Black. Subtext 'a branding & design studio in Berlin.' at 24px Quattrocento Sans, weight 400, Midnight Black.
Create a Ghost Action Button: text 'Corporate Design' in Button Text Gray (#4e4a4a), 1px Ghost Border (#d8d8d8), 0px radius, 5px top, 20px right, 6px bottom, 20px left padding.
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
Create a Blog Post Card: Transparent background, no shadow, 0px radius. Headline 'Baubauwerk's design selected' at 24px Telegraf, weight 400, Midnight Black. Category badge 'News' in Midnight Black text, transparent background, 1px top, 0px right, 0px bottom, 1px left padding, 0px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520590436-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520590436-thumb.jpg |
