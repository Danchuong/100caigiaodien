# Hugging Face — Refero Style

- Refero URL: https://styles.refero.design/style/4363070d-02da-4954-88e4-d4a2101c5204
- Site URL: https://huggingface.co
- ID: 4363070d-02da-4954-88e4-d4a2101c5204
- Theme: light
- Industry: ai
- Created: 2026-02-06T09:54:45.000Z
- Ranks: newest: 1225, popular: 311, trending: 406

> High-contrast data console. A brightly lit control panel with precise readouts and subtle depth.

## Description

Hugging Face presents a UI that feels like a meticulously organized, high-performance data console under bright, even lighting. The visual identity hinges on a subtle interplay of dark grays and bright whites, using minimal accent colors to highlight interactive elements and status. The crisp typography and sharp corners create an atmosphere of precision and utility, while soft shadows add subtle layers of hierarchy without heavy visual weight, making complex data structures feel approachable.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, primary surface for content areas like input fields. |
| Fog Gray | #e5e7eb | neutral | Subtle borders, dividers, ghost button backgrounds, and secondary surface accents. It defines boundaries gently without harsh lines. |
| Ash Gray | #f3f4f6 | neutral | Slightly darker secondary backgrounds, separating content blocks or showcasing inactive states, providing a touch more visual separation than Canvas White. |
| Jet Black | #000000 | neutral | Primary text, critical headings, and button text, ensuring maximum contrast and readability against light backgrounds. |
| Carbon | #101828 | neutral | Darker backgrounds for immersive sections, navigation elements, and primary buttons in dark mode areas, establishing a base for high-contrast white text. |
| Slate Blue | #4a5565 | neutral | Secondary text for descriptions, subtle borders, and inactive or less emphasized UI elements. This color provides visual relief from pure black. |
| Azure Link | #155dfc | accent | Interactive text links and key actionable elements, providing a clear visual indicator of engagement. |
| Crimson Accent | #ff3939 | semantic | Semantic highlight for negative states or alerts, used sparingly to draw attention. |
| Electric Blue | #2b7fff | semantic | Semantic highlight for informational states or subtle branding touches, offering an alternative to Azure Link. |
| Sunset Orange | #ff6900 | accent | Badge backgrounds and small accent elements, adding vibrancy in a contained manner. |
| Grape Violet | #8e51ff | accent | Badge backgrounds and small accent elements, providing distinct categorization. |
| Lime Green | #7ccf00 | semantic | Semantic highlight for positive states or success indicators. |
| Goldenrod | #fe9a00 | accent | Badge backgrounds and small accent elements, adding a warm, bright category indicator. |
| Fuchsia Pink | #f6339a | accent | Badge backgrounds and small accent elements, offering a third vibrant categorization. |
| Nebula Blue Gradient | #30404a | accent | Background for specific feature blocks or card elements within darker sections, creating a sense of depth and slight distinction. |
| Warm Sunset Gradient | #e79321 | accent | Highlight elements or banners that require a vibrant, energetic visual cue. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Source Sans Pro | Open Sans, Lato | 400, 600, 700 | 10px, 12px, 13px, 14px, 15px, 16px, 18px, 20px, 24px, 30px, 48px, 60px, 96px | 1.00, 1.20, 1.25, 1.33, 1.37, 1.40, 1.43, 1.50, 1.56 | The primary typeface for all text content including body, headings, links, and buttons. Its clean, sans-serif structure provides legibility across all sizes, anchoring the UI's practical, information-dense aesthetic. |
| IBM Plex Mono | Space Mono, Fira Code | 400 | 15px | 1.60 | Used for code snippets and technical labels, typically within heading elements as seen, adding a distinct developer-centric feel without overwhelming the interface. Its monospaced nature clearly designates technical information. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0 |
| body | 14 | 1.43 | 0 |
| heading-sm | 18 | 1.5 | 0 |
| heading | 24 | 1.33 | 0 |
| heading-lg | 30 | 1.25 | 0 |
| display | 48 | 1.2 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "inputs": "8px",
    "buttons": "8px, 25.6px",
    "default": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": "1280px"
}
```

## Components

### Trending Models & Spaces Cards



### Spaces Cards — Colorful Gradient Cards



### Search Bar + Filter Tab Bar



### Primary Button - Dark

**Role:** Call to action

Solid Carbon (#101828) background with Canvas White (#FFFFFF) text. Rounded corners at 8px. Padding 8px vertical, 16px horizontal. Signifies primary actions, often within darker UI sections.

### Secondary Button - Ghost

**Role:** Secondary action

Transparent background with a subtle Fog Gray (#E5E7EB) border and Jet Black (#000000) text. No border radius (0px). Padding 2px vertical, 8px horizontal. Used for less prominent actions, appearing as an understated link with a boundary.

### Large Rounded Button

**Role:** Hero CTA

Fog Gray (#e5e7eb) background with Jet Black (#000000) text. Significantly rounded corners at 25.6px. Large padding 24px vertical, 24px horizontal. Used for prominent calls to action in hero sections or key promotional areas, providing a distinct, friendly feel.

### Input Field

**Role:** Data entry

Canvas White (#ffffff) background with Jet Black (#000000) text and Fog Gray (#e5e7eb) border. Rounded corners at 8px. Padding 8px vertical, 12px (left) to 32px (left, with icon) horizontal. Indicates interactive input areas for user data.

### Content Card - Subtle Shadow

**Role:** Grouped content, data list item

Transparent background with 8px border radius. Uses a subtle shadow: `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`. No explicit padding, content determines internal spacing. Used for displaying individual items in lists or grids, providing gentle visual separation without heavy borders.

### Content Card - No Shadow/Border

**Role:** Pure content block

Transparent background, no border radius, no shadow. This variant is designed for seamless integration into larger content areas where visual separation is handled by background shifts or strong typography, maintaining a flat aesthetic. Often used for header-like content within lists.

### Navigation Link - Active

**Role:** Current page indicator

Text in Azure Link (#155dfc), indicating the currently selected or active navigation item. No specific background or padding, relies on text color for emphasis. Usually within the main navigation bar.

### Pill Badge - Category

**Role:** Categorization, meta-data

Varied vibrant backgrounds (Sunset Orange, Grape Violet, Goldenrod, Fuchsia Pink) with white text. Rounded corners (8px). Padding is minimal, e.g., 4px vertical, 14px horizontal. Used for concise, color-coded labeling within content cards or lists.

## Do's

- Prioritize Source Sans Pro for all text, using Jet Black (#000000) on light backgrounds for maximum legibility.
- Use 8px border-radius as the default for interactive elements like buttons, input fields, and cards.
- Implement subtle shadows `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` for cards and interactive components to indicate elevation without heavy visual weight.
- Employ Fog Gray (#e5e7eb) for subtle borders and dividers, ensuring visual separation without creating harsh lines.
- Utilize Azure Link (#155dfc) exclusively for interactive text links and primary accents, maintaining its impact through limited use.
- Maintain an element gap of 8px to 16px between elements to ensure a compact yet readable layout.
- Align content to a maximum width of 1280px, with responsive padding, except for full-bleed hero sections.
- Use IBM Plex Mono for all programmatic or technical headings to explicitly differentiate them.

## Don'ts

- Avoid using highly saturated, non-brand colors for large background areas or primary UI elements; reserve them for small accents and badges only.
- Do not introduce strong, dark shadows; stick to the light, single-axis shadow that provides subtle depth.
- Avoid excessive variation in border radii; adhere to the 8px default for most elements and 25.6px for specific large CTAs.
- Do not use gradients as primary backgrounds for content sections; use them only for small, contained feature blocks or decorative elements.
- Never use pure black backgrounds with pure white text on every element, use Carbon (#101828) for dark sections to soften the visual contrast slightly.
- Do not use generic system fonts; always specify Source Sans Pro or IBM Plex Mono.
- Avoid random padding values; stick to multiples of 4px and 8px for vertical and horizontal spacing.

## Similar Brands

| Business | Why |
| --- | --- |
| GitHub | Shares a developer-focused, data-rich interface with extensive use of structured content, code snippets, and a clear hierarchy of information. Similar approach to using minimal color with subtle gray variations and accent colors. |
| Vercel | Exhibits a clean, performance-oriented aesthetic with a mix of light and dark sections, sharp typography, and deliberate use of blues as primary accents. The preference for Ghost buttons and subtle shadows is also aligned. |
| OpenAI | A similar blend of highly technical content presented in an approachable, streamlined UI. Emphasis on text clarity, structured data presentation, and restrained use of vibrant color for specific highlights. |
| Linear | Follows a similar principle of a clean, functional interface. While Linear often leans darker, the precision in typography, subtle elevation for cards, and judicious use of accent colors for interaction points are comparable. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #000000 (Jet Black)
- Background: #ffffff (Canvas White)
- CTA (Primary): #101828 (Carbon)
- Border: #e5e7eb (Fog Gray)
- Accent: #155dfc (Azure Link)

### 3 Example Component Prompts
1. Create a Hero section: full-bleed background linear-gradient(oklch(0.278 0.033 256.848) 0%, oklch(0.21 0.034 264.665) 100%). Centered headline: 'The AI community building the future.' (Source Sans Pro, 96px, 700 weight, #ffffff). Subtext: 'The platform where the machine learning community collaborates...' (Source Sans Pro, 18px, 400 weight, #f3f4f6, lineHeight 1.5). Two buttons: 'Explore AI Apps' (backgroundColor #101828, color #ffffff, borderRadius 8px, padding 8px 16px) and 'Sign Up' (backgroundColor #e5e7eb, color #000000, borderRadius 25.6px, padding 24px 24px).
2. Create a default Input Field: background #ffffff, border 1px solid #e5e7eb, color #000000, borderRadius 8px, paddingTop 8px, paddingRight 12px, paddingBottom 8px, paddingLeft 32px. Placeholder text: 'Search models, datasets, users...' (Source Sans Pro, 16px, 400 weight, #4a5565).
3. Create a Content Card: transparent background, borderRadius 8px, boxShadow rgba(0, 0, 0, 0.05) 0px 1px 2px 0px. Inside, include a heading 'zai-org/GLM-5.1' (Source Sans Pro, 16px, 600 weight, #000000) and a subtext 'Updated about 5 hours ago • 24k • 965' (Source Sans Pro, 14px, 400 weight, #4a5565).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923663642-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923663642-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4363070d-02da-4954-88e4-d4a2101c5204-1777652988750-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4363070d-02da-4954-88e4-d4a2101c5204-1777652988750-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4363070d-02da-4954-88e4-d4a2101c5204-1777652988750-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4363070d-02da-4954-88e4-d4a2101c5204-1777652988750-preview-detail-poster.jpg |
