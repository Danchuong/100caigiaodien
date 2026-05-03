# Egstad — Refero Style

- Refero URL: https://styles.refero.design/style/ec17bdec-c8fa-4221-abd6-da717bf38d96
- Site URL: https://egstad.com
- ID: ec17bdec-c8fa-4221-abd6-da717bf38d96
- Theme: light
- Industry: design
- Created: 2026-04-30T04:01:21.427Z
- Ranks: newest: 3, popular: 322, trending: 205

> Type-first Brutalist

## Description

Egstad's design system embraces a bold, unadorned aesthetic with stark visual contrasts. A muted, warm off-white background serves as the canvas for heavy, densely tracked sans-serif typography, asserting presence through scale and weight rather than color. Interactive elements use a tactile, almost skeumorphic toggle-like appearance with rounded full-bleed radii, creating a sense of mechanical precision against the otherwise flat plane. The overall impression is one of grounded, deliberate clarity, using minimal color to focus attention on structure and text.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Parchment | #e2e0d9 | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Inkwell Black | #252422 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Deepest Black | #000000 | neutral | Secondary text, subtle borders, high-contrast accents |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times New Roman | Times | 400 | 16px | 1.20 | Muted body text, navigation items, secondary information, adopting a classic feel. |
| EG Metaphor |  | 400 | 12px, 15px, 59px, 399px | 0.97, 1.00, 1.33, 1.34 | Dominant headlines and large display text, creating a strong, almost architectural presence with tight tracking and custom features for distinctive letterforms. |
| S85 |  | 400 | 12px | 3.00 | Specialized navigation elements and labels, characterized by wide tracking for a technical, spaced-out effect. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.34 | 0.24 |
| body-lg | 16 | 1.2 |  |
| heading | 59 | 1.33 |  |
| display | 399 | 0.97 | -22 |

## Spacing & Shape

```json
{
  "radius": {
    "tabs": "36px",
    "buttons": "1440px",
    "navigation": "1440px"
  },
  "elementGap": "16px",
  "sectionGap": "22px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Tab Active

**Role:** Primary navigation item, active state

Solid Inkwell Black background with Canvas Parchment text. Uses 1440px border radius for full rounded ends. Padding of 14px vertical and 30px horizontal, with 1px Deepest Black border.

### Navigation Tab Inactive

**Role:** Primary navigation item, inactive state

Transparent background with Inkwell Black text. Uses 1440px border radius for full rounded ends. Padding of 14px vertical and 30px horizontal, with 1px Canvas Parchment border.

### Navigation Link Outlined

**Role:** Small, outlined navigation link

Text in Inkwell Black, border in Canvas Parchment. Uses S85 font at 12px, 0.1em letter spacing. Padding of 14px vertical and 16px horizontal. Radius of 1440px for a pill shape.

### Large Typography Headline

**Role:** Main heading text on hero sections

Uses EG Metaphor font at 399px, weight 400, Inkwell Black color, with -0.055em letter spacing. Underlined with a 4px solid Inkwell Black line.

### Body Text Section

**Role:** Paragraphs of body content

Times New Roman at 16px, weight 400, Inkwell Black color. Line height 1.2. Margin bottom of 14px between paragraphs.

## Do's

- Prioritize text as the primary visual element, using large scale and distinct typefaces to convey meaning.
- Maintain high contrast between text (Inkwell Black) and background (Canvas Parchment) for all content.
- Use 1440px border radius consistently for all interactive elements and navigation items to create a 'pill' shape.
- Apply -0.055em letter spacing to display text (EG Metaphor 399px) to enhance its compactness and visual weight.
- Employ the Canvas Parchment background as the dominant canvas, allowing Inkwell Black typography and components to stand out.
- Utilize 4px solid Inkwell Black lines for expressive underlines or dividers, particularly under large headlines.

## Don'ts

- Avoid decorative gradients or shadows; the aesthetic relies on flat, high-contrast forms.
- Do not introduce additional color; the palette is strictly monochrome with a warm neutral base.
- Do not vary from the precise letter spacing applied to display and specialized navigation text (S85), as it is integral to their identity.
- Avoid complex layouts or highly nested elements; maintain a clean, open composition.
- Do not use Times New Roman for display elements; reserve it for secondary content where a classic feel is desired.

## Layout

The site employs a max-width contained layout, with content usually centered. The hero section features extremely large, full-width typography ('EGSTAD') which dominates the screen, often overlapping with the circular portrait. Sections maintain a consistent vertical rhythm, primarily defined by the spacing between large text blocks and smaller content groupings. Navigation consists of a static top bar with interactive 'pill' shaped buttons, appearing like a physical tab interface, and a secondary minimalist footer navigation. The overall density is spacious, emphasizing individual elements rather than overwhelming the user with information.

## Imagery

This site features very minimal imagery. When present, it appears as a singular, dominant, circular cropped portrait of a person, positioned in a way that visually interacts with text. There are no other visual elements like photography, illustrations, or product screenshots. The focus is entirely on typography and UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Brutalist Websites | Employs an unadorned, high-contrast, type-focused approach with minimal use of color or decorative elements. |
| Linear | Uses a stark, functional aesthetic with strong typography and high contrast across UI elements. |
| Stripe | Features a clean, minimalist design with a focus on typography and clear functional elements, though more refined than Egstad. |
| Are.na | Prioritizes content clarity with minimal UI chrome, using a neutral color palette and straightforward type. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #252422
background: #e2e0d9
border: #e2e0d9
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary navigation bar: Use a Canvas Parchment background. The active item should be an 'Inkwell Black' background with Canvas Parchment text, 1440px radius, 14px vertical and 30px horizontal padding, with a 1px Deepest Black border. Inactive items should be transparent with Inkwell Black text, 1440px radius, 14px vertical and 30px horizontal padding, and a 1px Canvas Parchment border. Use Times New Roman at 16px for text.
2. Create a main hero headline: Use 'EG Metaphor' font, 399px size, weight 400, Inkwell Black color, -0.055em letter spacing. Include a 4px solid Inkwell Black underscore.
3. Create a secondary information paragraph: Use Times New Roman, 16px size, weight 400, Inkwell Black color, with 1.2 line height. Ensure 14px spacing below the paragraph.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521663997-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521663997-thumb.jpg |
