# Runway — Refero Style

- Refero URL: https://styles.refero.design/style/874aaea0-c718-454e-8a58-f3beed1284ec
- Site URL: https://runway.com
- ID: 874aaea0-c718-454e-8a58-f3beed1284ec
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:34:57.777Z
- Ranks: newest: 757, popular: 629, trending: 499

> Warm, analytical canvas.

## Description

Runway presents a sophisticated, high-contrast light interface built on a minimal palette of warm greys and off-whites, punctuated by a single vibrant amber for key calls to action. The aesthetic blends the precise utility of a spreadsheet with the approachable feel of a modern web application. Surfaces are predominantly flat, with subtle shadows on interactive elements, conveying lightweight utility. Typography is compact and precise, using a variable sans-serif font across a wide range of weights and sizes to establish clear hierarchy.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #261b07 | neutral | Primary text, borders, decorative icons, card outlines, subtle accents within components. It provides strong contrast against light backgrounds for readability and definition |
| Stone | #61594a | neutral | Secondary text, muted borders, subtle UI elements where less emphasis than Ink is desired. Adds depth to the neutral palette |
| Off-White | #f8f7f5 | neutral | Page background, light card surfaces, badge backgrounds. The dominant background color establishing the overall light theme |
| Pearl | #ffffff | neutral | Elevated card backgrounds, button backgrounds. Used for critical surfaces that need to stand out slightly from the main page background |
| Faded Stone | #e3dfd5 | neutral | Hairline borders, subtle dividers, background color for less prominent UI sections. Provides a visual break between content without strong contrast |
| Shadow Tint | #aca89f | neutral | Used for shadow tints, rather than a solid color to create depth |
| Amber Action | #f9a600 | accent | Call-to-action button backgrounds. This vivid amber is the primary interactive accent, drawing attention to critical user actions |
| Sunset Orange | #e89b01 | accent | Yellow accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Warning Red | #f0624f | accent | Orange outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Grape Badge | #d5befa | accent | Violet state accent for badges, validation surfaces, and short status labels. |
| Sunshine Badge | #f8da9d | accent | Background for secondary accent badges, offering another moderate, warmer alternative to the Grape Badge |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Interphases Pro Variable | Inter | 400, 492, 584 | 12px, 14px, 16px, 20px, 24px, 36px, 56px, 65px, 72px | 1.00, 1.13, 1.25 | The primary typeface for all text content including headings, body, and UI elements. Its variable font properties allow for precise control of weight for subtle hierarchy and information density. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.13 | 0.6 |
| body-sm | 14 | 1.25 | -0.14 |
| body | 16 | 1.25 | -0.16 |
| subheading | 20 | 1.25 | -0.2 |
| heading-sm | 24 | 1.25 | -0.29 |
| heading | 36 | 1.25 | -0.61 |
| heading-lg | 56 | 1.13 | -1.06 |
| display | 72 | 1 | -1.58 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "badges": "6px",
    "buttons": "8px",
    "formFields": "4px",
    "interactiveElements": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "56px",
  "cardPadding": "32px",
  "pageMaxWidth": "1216px"
}
```

## Components

### Primary Action Button (Filled)

**Role:** Main call-to-action

Background: Amber Action (#f9a600), Text: Ink (#261b07), Border-radius: 8px, Horizontal padding: 17.5px, Vertical padding: 7px. The contrasting dark text on amber ensures high visibility.

### Secondary Action Button (Outlined)

**Role:** Secondary calls-to-action and ghost buttons.

Background: transparent (rgba(0,0,0,0)), Text: Ink (#261b07), Border: Ink (#261b07), Border-radius: 8px, Horizontal padding: 12.25px, Vertical padding: 7px. Offers an alternative action that carries less visual weight than the filled primary button.

### Navigation Link Button

**Role:** Primary navigation items in header/footer.

Background: transparent (rgba(0,0,0,0)), Text: Ink (#261b07), Border: Ink (#261b07) - only on specific interactive states, Border-radius: 8px, Padding: variable, for example, 32px vertical. Minimal styling for navigation.

### Standard Card

**Role:** Information containers, feature blocks.

Background: Pearl (#ffffff), Border-radius: 12px, Box-shadow: rgba(38,27,7,0.06) 0px 4px 8px 0px. Internal padding: 63px (all sides).

### Elevated Card

**Role:** Interactive data panels or forms.

Background: Pearl (#ffffff), Border-radius: 8px, Multi-layered Box-shadow: inset rgba(255,255,255,0.56) 0px 2px 4px 0px, rgba(38,27,7,0.06) 0px 4px 8px 0px, rgba(38,27,7,0.36) 0px 1px 2px 0px. Internal padding: 4px. The inset shadow creates a subtle inner glow.

### Ghost Card

**Role:** Visual grouping of elements without strong borders.

Background: transparent (rgba(0,0,0,0)), Border-radius: 8px, No shadow. Internal padding: 0px. Defines regions through proximity and content rather than explicit bounding boxes.

### Basic Badge

**Role:** Tags, labels, small descriptive elements.

Background: Off-White (#f8f7f5), Text: Ink (#261b07), Border-radius: 6px, Padding: 3px vertical, 6px horizontal.

### Accent Badge (New)

**Role:** Highlighting new features or important statuses.

Background: Grape Badge (#d5befa), Text: Ink (#261b07), Border-radius: 6px, Padding: 3.8px vertical, 6px horizontal. Visually distinct due to its color.

## Do's

- Use Off-White (#f8f7f5) as the primary background for all page sections to maintain a bright, expansive canvas.
- Apply Ink (#261b07) for all primary text and critical UI borders to ensure high contrast and readability.
- Reserve Amber Action (#f9a600) strictly for filled primary calls-to-action, ensuring it is the sole vibrant interactive accent.
- Employ the Interphases Pro Variable font consistently across all text elements, leveraging its weights for hierarchy rather than introducing new typefaces.
- Maintain a compact density, utilizing 4px element gaps for most inline spacing and 56px for clear section breaks.
- Apply 12px border-radius for all major card components and 8px for buttons and interactive controls, balancing softness with precision.
- Utilize the defined box-shadows for cards to add subtle depth, avoiding overuse of strong, opaque shadows.

## Don'ts

- Do not introduce new saturated colors for interactive elements; rely on Amber Action (#f9a600) or its outlined variant.
- Avoid using gradients on cards or buttons unless explicitly defined as part of the system; surfaces should remain mostly flat.
- Do not use dark backgrounds for page sections; the system is built around a light theme, with Pearl (#ffffff) and Off-White (#f8f7f5) surfaces.
- Refrain from altering the Interphases Pro Variable font's letter-spacing beyond the defined scale, as tracking is critical for its visual balance.
- Do not add additional border-radius values; stick to 12px for cards, 8px for buttons and interactive elements, and 6px for badges.
- Avoid excessive use of deep shadows or multiple shadow layers outside of the defined card and button styles; maintain a lightweight visual feel.
- Do not use bold or heavy weights for body text; reserve stronger weights for headings and key emphasis to preserve clarity in a compact layout.

## Layout

The page adheres to a maximal width of 1216px, centrally aligned. The hero section features a prominent, centered headline and subtext, with action buttons beneath, set against a subtle, textured background. Section rhythm is primarily consistent vertical spacing with some alternating background (Off-White, Faded Stone, or Pearl) bands defining content blocks. Content arrangement frequently uses a centered stack for narrative sections, and occasionally two-column layouts featuring text on one side and product screenshots or abstract graphics on the other. Card grids are utilized for presenting features or testimonials, typically in a 3-column format. Navigation is a compact top bar, with prominent branding on the left and utility links/buttons on the right, maintaining a sticky presence on scroll.

## Imagery

The site uses a combination of product screenshots, abstract graphics, and a single stylized diagram. Product screenshots are typically tightly cropped, showcasing the UI of the Runway application directly within card-like containers, implying the tool itself is the focus. Abstract graphics or simple diagrams feature minimalist, geometric shapes in muted tones, often with a hint of the brand's Ink or Stone colors, serving as decorative atmosphere rather than conveying specific information. Icons are primarily outlined or subtle fills, aligning with the lightweight UI. Imagery density is moderate, carefully balancing explanatory visuals with text, avoiding large, immersive hero images except for subtle background textures.

## Elevation

| Element | Style |
| --- | --- |
| Standard Card | rgba(38,27,7,0.06) 0px 4px 8px 0px |
| Elevated Card/Button | inset rgba(255,255,255,0.56) 0px 2px 4px 0px, rgba(38,27,7,0.06) 0px 4px 8px 0px, rgba(38,27,7,0.36) 0px 1px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochrome UI with strong typography, subtle elevation, and a single accent color for interaction. |
| Ramp | Clean, light UI, focus on data presentation, and similar use of warm neutral palette with a bright action color. |
| Attio | High-contrast text on light backgrounds, compact UI elements, and a considered neutral color system. |
| Coda | Document-oriented UI with strong emphasis on clarity, crisp borders, and subtle surface differentiation. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #261b07
background: #f8f7f5
border: #261b07
accent: #f9a600
primary action: #f9a600 (filled action)

Example Component Prompts:
1. Create a hero section with a centered headline: 'Simulate any business decision in seconds' (Interphases Pro Variable, 72px, weight 584, #261b07, letter-spacing -1.58px, lineHeight 1.0). Below add a primary action button: 'Talk to a human' (Amber Action #f9a600 background, Ink #261b07 text, 8px radius, 7px vertical padding, 17.5px horizontal padding).
2. Create a feature card: 'Shape data to your business logic' (Interphases Pro Variable, 24px, weight 584, #261b07, letter-spacing -0.29px, lineHeight 1.25) with body text (Interphases Pro Variable, 16px, weight 400, Ink #261b07, letter-spacing -0.16px, lineHeight 1.25). Card background is Pearl #ffffff, 12px radius, with box-shadow rgba(38,27,7,0.06) 0px 4px 8px 0px and 63px internal padding.
3. Create a Primary Action Button: #f9a600 background, #261b07 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509264503-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509264503-thumb.jpg |
