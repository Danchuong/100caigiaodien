# Electronic Materials Office® — Refero Style

- Refero URL: https://styles.refero.design/style/297f65f7-0fbd-4521-ab91-a5f6e17175d9
- Site URL: https://electronicmaterialsoffice.com
- ID: 297f65f7-0fbd-4521-ab91-a5f6e17175d9
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:28:50.412Z
- Ranks: newest: 591, popular: 1132, trending: 1121

> Deep charcoal precision

## Description

The Electronic Materials Office design system presents a future-forward, material-focused aesthetic: deep charcoal surfaces provide a sophisticated backdrop for precise typography. A single vibrant orange acts as a focused accent, guiding user interaction and highlighting key product details. The overall experience is one of refined minimalism, emphasizing form and function through limited color, structured spacing, and highly legible text.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon | #202020 | neutral | Page backgrounds, prominent card surfaces, primary dark canvas |
| Vanilla Ice | #FFFFFF | neutral | Light neutral action fill for buttons on dark surfaces. |
| Ash | #9d9d9d | neutral | Muted text, secondary body copy, subtle borders for inactive elements |
| Obsidian | #000000 | neutral | Button text on light backgrounds, ghost button borders, deeper shadow effects |
| Power Orange | #f45500 | brand | Primary action buttons, interactive highlights, product accent details— a vivid pop against the dark palette |
| Electric Violet | #9e9eff | accent | Interactive link text, active state borders— provides a secondary vibrant accent for navigation elements |
| Dark Umber | #933400 | accent | Orange supporting accent for decorative details and low-frequency emphasis. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400 | 16px | 1.20 | Standard body text and longer descriptive paragraphs. The classic serif grounds the futuristic product in timeless readability. |
| GT-Flexa | Montserrat | 200, 400 | 16px, 24px, 26px, 28px, 42px, 68px, 86px | 1.00, 1.06, 1.08, 1.14, 1.20, 1.31, 1.33 | Prominent headings and UI elements. At larger sizes, the varied weights create dynamic visual hierarchy and a distinct brand voice. |
| Tobias-light | Lato | 400 | 32px, 42px | 1.20 | Key headlines and product feature titles. The subtle negative letter-spacing contributes to a refined, architectural feel, giving space without feeling sparse. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.2 |  |
| subheading | 24 | 1.06 |  |
| heading-sm | 32 | 1.2 | -0.62 |
| heading | 42 | 1.2 | -0.48 |
| heading-lg | 68 | 1.31 |  |
| display | 86 | 1.33 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "buttons": "16px",
    "elements": "20px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button (Pre-order)

**Role:** Main call-to-action button, driving conversions.

Filled with Power Orange (#f45500), Vanilla Ice (#ffffff) text, with a 16px border-radius and minimal 1px vertical padding and 16px horizontal padding. Features a subtle orange shadow rgba(245, 86, 0, 0.6) 0px 0px 30px 0px.

### Play Film Button

**Role:** Secondary action button, typically embedded in rich media sections.

Filled with Vanilla Ice (#ffffff), Obsidian (#000000) text, with a 20px border-radius and 0px vertical padding and 16px horizontal padding. Features a soft white shadow rgba(255, 255, 255, 0.3) 0px 0px 30px 0px.

### Compact Accent Button

**Role:** Small, functional button for specific actions like 'Pre-order' in the header.

Filled with Power Orange (#f45500), Vanilla Ice (#ffffff) text, with a 20px border-radius and 1px vertical padding and 6px horizontal padding.

### Product Feature Card

**Role:** Displays key features or specifications with an associated visual.

Defined by a Carbon (#202020) background, 20px border-radius, with 0 padding internally, leveraging imagery and adjacent text for content. Borderless and shadowless.

### Transparent Card

**Role:** Used for content overlays or sections that should blend with the background.

Transparent background with 0px border-radius and 24px padding. No shadows or borders, maintaining a seamless visual flow.

## Do's

- Use Carbon (#202020) as the dominant background color for most sections to maintain the dark theme.
- Apply Power Orange (#f45500) exclusively for primary calls-to-action and key interactive accents.
- Prioritize GT-Flexa for all headings and UI elements that require a distinct brand voice.
- Employ Tobias-light with negative letter-spacing for large, impactful headlines to create a sense of elegant precision.
- Utilize 20px border-radius for cards and content containers, and 16px for primary action buttons.
- Maintain a comfortable density with element gaps of 4px and section gaps of 48px.
- Ensure all interactive text and links use Electric Violet (#9e9eff) for recognition, only if they are true interactive links. Vanilla Ice (#ffffff) should be used for static link-like text.

## Don'ts

- Do not introduce new vibrant colors outside of Power Orange and Electric Violet for interaction or branding.
- Avoid using serif typography for UI elements or headings; reserve Times for body content only.
- Do not deviate from the established 20px and 16px border-radii for cards and buttons respectively.
- Refrain from adding arbitrary shadows or borders to elements; elevation is used sparingly and deliberately.
- Do not use Electric Violet for button backgrounds; it is primarily for links and borders.
- Avoid excessive spacing or padding that breaks the comfortable density; stick to 4px multiples for consistency.
- Do not use pure black (#000000) as a background unless specifically for text on a white element or as a deep accent shade.

## Layout

The page primarily uses a full-bleed layout on a dark background, interspersed with content sections that maintain a visual max-width for readability, even if technically full-bleed. The hero section features a centered product visual over a dark background. Sections alternate between centered content stacks and dynamic arrangements of text and product imagery within a grid-like structure. There's a consistent vertical rhythm created by the 48px section gap, providing ample breathing room. Navigation is minimal, featuring a discreet top bar with essential links and a prominent 'Pre-order' button.

## Imagery

This system primarily uses high-fidelity product photography of the keyboard, tightly cropped and presented on a Carbon (#202020) background. The visuals are clean, showcasing the product's materiality and design. There are also abstract illustrations of keycaps that maintain a flat, geometric style. Icons, when present, are outlined and monochromatic. Imagery serves to showcase the product's features and aesthetics rather than providing atmosphere, maintaining a product-focused, almost studio-shot quality.

## Elevation

| Element | Style |
| --- | --- |
| Primary Action Button | rgba(245, 86, 0, 0.6) 0px 0px 30px 0px |
| Play Film Button | rgba(255, 255, 255, 0.3) 0px 0px 30px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Keychron | Dark UI, focus on mechanical keyboards, product-centric imagery, and subtle color accents. |
| teenage engineering | Minimalist aesthetic for consumer electronics, industrial design focus, and clean, compact typography. |
| Apple (accessories) | High-fidelity product imagery on stark backgrounds, emphasis on materials, and a premium, understated visual tone. |
| Grovemade | Focus on high-quality desk accessories, dark/earthy aesthetic, and clean, structured layouts. |

## Custom Sections

### Agent Prompt Guide

primary action: #f45500 (filled action)
Create a Primary Action Button: #f45500 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

Create a hero section: background Carbon (#202020). Headline 'Introducing the Altar I' using Tobias-light weight 400, size 86px, line-height 1.33, letter-spacing -0.48px, color Vanilla Ice (#FFFFFF).


Generate a featured product card: A 20px rounded Carbon (#202020) background, with an internal image taking up the top 75% height. Below the image, add a GT-Flexa weight 400, size 24px title 'Keycaps' in Vanilla Ice (#FFFFFF), and a Times weight 400, size 16px description 'Novel key shape' in Ash (#9d9d9d), all with 24px padding within the card.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512510974-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512510974-thumb.jpg |
