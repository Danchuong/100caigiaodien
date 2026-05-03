# Overflow — Refero Style

- Refero URL: https://styles.refero.design/style/6845a075-8573-4bdc-9346-58cb09b83547
- Site URL: https://overflow.io
- ID: 6845a075-8573-4bdc-9346-58cb09b83547
- Theme: light
- Industry: design
- Created: 2026-04-04T09:11:54.000Z
- Ranks: newest: 959, popular: 567, trending: 800

> Vibrant digital canvas. A bright, expansive white canvas animated by soft, flowing color gradients.

## Description

Overflow's design evokes a sense of vibrant, dynamic clarity, like a digital canvas brought to life with soft pastels. The dominant white background keeps the focus on content, while subtle card shadows provide necessary dimensional separation. The playful use of gradient backgrounds infuses energy without overwhelming the UI, suggesting creativity within a structured environment. Varied border radii, from sharp 8px to soft 24px and even circular forms, add visual interest and a touch of approachability.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #000000 | neutral | Primary text, core UI elements, primary button background. |
| Ghost White | #fafafc | neutral | Page backgrounds, prominent card surfaces. |
| Slate Gray | #666666 | neutral | Secondary text, descriptive body copy, subtle iconography. |
| Light Ash | #dadce0 | neutral | Subtle border colors, separators in navigation. |
| Cloud Gray | #f0f0f2 | neutral | Subtle card backgrounds, input fields, less prominent buttons. |
| Deep Violet | #161637 | brand | Hero headlines, navigation links — deep, sophisticated color provides a calm anchor to the vibrant gradients. |
| Overflow Blue | #0085e4 | accent | Interactive links, specific highlights, subtle accents within illustrations. |
| Gradient Sky | #7272fb | brand | Hero section background, large banners — creates an expansive, dreamlike atmosphere. |
| Gradient Ocean | #007bff | brand | Promotional banners, subtle background shifts — signifies optimism and connection. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400, 500, 550, 600, 700, 800 | 12px, 14px, 15px, 16px, 20px, 24px, 26px, 32px, 48px, 56px | 1.00, 1.07, 1.14, 1.15, 1.16, 1.20, 1.25, 1.33, 1.42, 1.43, 1.50, 1.57, 1.58, 1.60, 1.67, 1.75 | Primary typeface for all content. A workhorse sans-serif, its varied weights and precise letter-spacing create a sophisticated yet highly readable typographic hierarchy, from commanding headlines to fine print. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.24 |
| body-sm | 14 | 1.5 | -0.07 |
| subheading | 20 | 1.4 | -0.2 |
| heading | 24 | 1.33 | -0.29 |
| heading-lg | 32 | 1.25 | -0.61 |
| display | 48 | 1.15 | -1.01 |
| display-lg | 56 | 1.07 | -1.4 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px, 24px, 0px",
    "inputs": "8px",
    "buttons": "8px, 22px, 50%",
    "navElements": "12px"
  },
  "elementGap": "",
  "sectionGap": "40px",
  "cardPadding": "",
  "pageMaxWidth": "1288px"
}
```

## Components

### CTA Button Group



### Feature Cards Grid



### Social Proof Banner



### Primary Dark Button

**Role:** Main calls to action.

backgroundColor: #000000, color: #FFFFFF, borderRadius: 8px, padding: 15px 12.8px. Emphasizes action against a light background.

### Circular Icon Button

**Role:** Small, contained actions like 'play video' or 'more info'.

backgroundColor: #f2f2f4, color: #000000, borderRadius: 50%, padding: 15px 16px. Visually distinctive and playful for non-critical interactions.

### Ghost Card

**Role:** Content container without visual hierarchy emphasis.

backgroundColor: rgba(0, 0, 0, 0), borderRadius: 0px, padding: 40px. Used for sectioning content on the primary page background without additional styling.

### Light Gray Input

**Role:** Standard form input fields.

backgroundColor: rgba(0, 0, 0, 0.04), borderColor: #e8e8ea, borderRadius: 8px, padding: 16px. A subtle, unobtrusive field blending with the light theme.

### Subtle Gray Card

**Role:** Feature cards or content blocks needing slight background distinction.

backgroundColor: #f5f5f7, borderRadius: 24px, padding: 24px. Provides a visual break from the main white background without strong contrast or shadow.

## Do's

- Use Inter font family exclusively for all text elements.
- Prioritize Midnight Graphite (#000000) for primary text and Ghost White (#fafafc) for background surfaces to ensure optimal contrast.
- Apply Soft Shadow Cards (background: #FFFFFF, borderRadius: 24px, boxShadow: rgba(0, 0, 0, 0.08) 0px 4px 16px -8px) to visually elevate key content blocks.
- Utilize either 8px or 24px borderRadius for most UI elements like buttons and cards, creating a consistent soft yet defined aesthetic.
- Introduce brand gradients like Gradient Sky (linear-gradient(127deg, rgb(114, 114, 251) 0px, rgb(184, 225, 255) 99%)) in hero sections or large thematic areas to add dynamic visual interest.
- Maintain consistent letter spacing as defined for Inter, especially negative values for larger text, to enhance readability and visual density: e.g., -0.0210em for 48px headlines.

## Don'ts

- Avoid using harsh or dark shadow values; adhere to the subtle, diffused style like rgba(0, 0, 0, 0.08) 0px 4px 16px -8px.
- Do not introduce new color hues; stick to the established palette of Deep Violet, Overflow Blue, and the neutral scale.
- Refrain from using square (0px) border radii for interactive elements; maintain a degree of roundness (at least 8px).
- Avoid excessive text decoration or capitalization; rely on weight and color changes for emphasis.
- Do not deviate from the defined Inter font scale, line heights, or letter spacing. These are critical for brand consistency and readability.

## Layout

The layout is primarily a max-width 1288px container, centered, with occasional full-bleed sections. The hero section is full-bleed, featuring a striking gradient background with a large, centered headline and a prominent call-to-action. Subsequent sections alternate between the main white background and subtle gray backgrounds, with consistent vertical spacing. Content is arranged in flexible patterns, including centered stacks, multi-column feature grids (like the 3-column card grid for 'superpowers'), and fluid component arrangements. There's a clear visual rhythm established by the section breaks and card layouts, with ample breathing room. The navigation is a sticky top bar with a logo, primary links, and prominent download buttons.

## Imagery

Imagery primarily features product screenshots with a focus on UI elements, often presented within white or subtle gray frames, sometimes overlapping for a dynamic effect. The screenshot treatment highlights the software's functionality, with minimal surrounding context. Photography is completely absent. Icons are typically monolinear or filled, matching the overall clean aesthetic. Abstract gradients serve as atmospheric backgrounds rather than explicit imagery. The density suggests a product-heavy site where the application itself is the hero, supported by graphical representations of its features.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean, product-focused UI with an emphasis on clarity, similar use of soft card shadows, and interactive illustrations. |
| Miro | White canvas aesthetic, digital-first illustration style, and subtle use of brand colors for interactive elements. |
| Notion | Minimalist layout, strong typographic hierarchy on a light background, and functional UI elements taking precedence over decorative imagery. |
| Linear | High-contrast text on light backgrounds, measured use of rounded corners, and a focus on essential UI components. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #000000
- Background (Page): #fafafc
- CTA Button (Background): #000000
- Accent (Links): #0085e4
- Card Background (Elevated): #FFFFFF

### 3-5 Example Component Prompts
1. Create a hero section: Gradient Sky background (linear-gradient(127deg, rgb(114, 114, 251) 0px, rgb(184, 225, 255) 99%)). Centered headline 'User flows done right' (Inter, 56px, 800 weight, -1.4px letter spacing, #161637 color). Underneath, a paragraph of body text (Inter, 20px, 400 weight, -0.2px letter spacing, Slate Gray #666666). Below that, a Primary Dark Button 'Download - free trial' (backgroundColor: #000000, color: #FFFFFF, borderRadius: 8px, padding: 15px 12.8px).
2. Generate a featured card: Soft Shadow Card (backgroundColor: #FFFFFF, borderRadius: 24px, boxShadow: rgba(0, 0, 0, 0.08) 0px 4px 16px -8px, padding: 24px). Inside, a heading 'Discover your new superpowers' (Inter, 32px, 700 weight, -0.61px letter spacing, #000000 color). Add a paragraph of body copy (Inter, 15px, 400 weight, -0.09px letter spacing, #666666 color).
3. Design a navigation bar: Ghost White background (#fafafc), padding 12px vertical. Include a 'Sign in' link (Inter, 16px, 500 weight, -0.13px letter spacing, #161637). Next to it, a Primary Dark Button 'Download for free' (backgroundColor: #000000, color: #FFFFFF, borderRadius: 8px, padding: 15px 12.8px).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932810928-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932810928-thumb.jpg |
