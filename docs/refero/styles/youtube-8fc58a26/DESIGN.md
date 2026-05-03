# YouTube — Refero Style

- Refero URL: https://styles.refero.design/style/8fc58a26-47be-406e-8429-37925551c0ec
- Site URL: https://youtube.com
- ID: 8fc58a26-47be-406e-8429-37925551c0ec
- Theme: light
- Industry: media
- Created: 2026-04-07T19:23:10.000Z
- Ranks: newest: 940, popular: 214, trending: 592

> Crisp White Canvas; an expansive, information-first interface on a stark white background with minimal ornamentation.

## Description

The design prioritizes content delivery with a near-monochromatic palette and a spacious layout. A pure white background (
#ffffff) serves as a digital canvas, allowing black text (#0f0f0f) and a singular vivid blue (#065fd4) for interactive elements to carry all visual weight. Rounded corners (10px, 18px) provide subtle softness against an otherwise austere, functional aesthetic. The lack of decorative elements directs full attention to the video and community content.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary page and component backgrounds, creating a clean, expansive field for content. |
| Ink Black | #0f0f0f | neutral | Default text, primary icons, and border accents, providing high contrast against Canvas White. |
| Medium Gray | #606060 | neutral | Secondary text and less critical information, providing a subtle visual hierarchy. |
| Light Gray | #909090 | neutral | Tertiary text and subtle distinctions in navigation, indicating less emphasis. |
| Border Gray | #c6c6c6 | neutral | Input borders and subtle UI dividers, providing structural definition without visual noise. |
| Accent Blue | #065fd4 | brand | Interactive elements like links, primary buttons, and active navigation indicators — this is the sole color accent used to highlight engagement points. |
| YouTube Red | #ff0033 | brand | YouTube logo and specific brand elements, appearing sparingly. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roboto | system-ui | 400, 500, 700, 900 | 10px, 12px, 13px, 14px, 16px | 1.20, 1.38, 1.43, 1.50, 2.57 | Primary text font for body copy, links, general UI elements, and buttons. Its unobtrusive nature supports content focus. |
| Arial | Helvetica, sans-serif | 400 | 13px | 1.20 | Fallback font for specific UI elements and legacy components, ensuring broad compatibility. |
| YouTube Sans | Roboto, sans-serif | 600 | 20px | 1.40 | Used for section headings, providing a distinct brand voice through its semi-bold weight at a generous size. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0 |
| body-lg | 14 | 1.2 | 0 |
| heading | 20 | 1.4 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "subtle": "40px",
    "buttons": "18px",
    "default": "10px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": "1185px"
}
```

## Components

### History Off — Dialogue Card



### Sidebar Navigation — Explore Section



### Sign In Prompt — Sidebar Card



### Navigation Link

**Role:** Interactive element

Text in Ink Black (#0f0f0f) using Roboto font, weight 400, size 14px. On hover, the background changes to a subtle grey. Active states are often marked with a background of rgba(0, 0, 0, 0.05).

### Search Input Field

**Role:** Data entry

Background is Canvas White (#ffffff), text in Ink Black (#0f0f0f). Border is thin, using Border Gray (#c6c6c6). Padding is 1px top/bottom, with subtle inner spacing. Border radius: 0px.

### Standard Button (Text)

**Role:** Action trigger

Background transparent (rgba(0,0,0,0)), text in Ink Black (#0f0f0f), Roboto font. No visible border. Padding: 0px.

### Rounded Action Button

**Role:** Primary action

Background rgba(0,0,0,0.05). Text Ink Black (#0f0f0f). Radius 18px. Uses 16px horizontal padding. Example: 'Sign in' button in the sidebar.

### Dialogue Card

**Role:** Information display

Canvas White (#ffffff) background with a light grey border of #eeeeee. Features rounded corners (radius 10px). Inner padding varies, commonly 16px.

### YouTube Red Indicator Button

**Role:** Brand-specific action

Background is Canvas White (#ffffff). Text color is YouTube Red (#ff0033). Icon is also in YouTube Red. Used for specific YouTube services like 'YouTube Premium'.

## Do's

- Use Canvas White (#ffffff) as the default background for all page sections and elevated components.
- Apply Ink Black (#0f0f0f) for all main headings, body text, and primary icons to ensure high contrast.
- Employ Accent Blue (#065fd4) exclusively for active states, clickable links, and primary calls to action.
- Maintain a clear visual hierarchy by utilizing Medium Gray (#606060) for secondary information and Light Gray (#909090) for tertiary details.
- Ensure all interactive buttons use a border-radius of 18px for a consistent soft, approachable shape.
- Adhere to Roboto weight 400 for standard body text and weight 600 for YouTube Sans for section headings.
- Use 16px horizontal padding within interactive buttons or elements like the 'Update setting' button.

## Don'ts

- Avoid using multiple accent colors; confine brand emphasis strictly to Accent Blue (#065fd4) and YouTube Red (#ff0033) for branding only.
- Do not introduce complex shadows or gradients; prioritize a flat, clean aesthetic over dimensional effects.
- Refrain from using heavily saturated images or illustrations that compete with UI elements; opt for functional imagery.
- Do not deviate from the established type scale and font families; maintain consistency in text presentation.
- Avoid tight spacing; maintain `elementGap` of 8px and larger gaps for sections to ensure content breathability.
- Do not use dark backgrounds for main content areas; reserve them for specific, isolated components if necessary.
- Do not apply rounded corners indiscriminately; reserve radii like 18px for buttons and 10px for cards/dialogues.

## Layout

The page adheres to a max-width 1185px centered content model. The hero section includes a sticky top navigation bar with a search input. A persistent left-hand sidebar acts as the primary navigation, featuring a hierarchical list of links and categories. Content areas are primarily full-width within the max-width container, with information generally stacked vertically or presented in a single, primary content column. There are no alternating background bands; the layout relies on a uniform Canvas White background to create a spacious, unbounded feeling. The design is information-dense in the main content area, with vertical sections separated by generous padding (sectionGap).

## Imagery

The site primarily uses functional icons and the brand's YouTube Red logo. Icons are line-based and filled, typically in black or gray, maintaining a minimalist, system-driven aesthetic. When imagery is present, it's typically video thumbnails – embedded content rather than decorative graphics. The visual language emphasizes direct content presentation over abstract visuals or elaborate photography, with illustrations being absent. Density is low, with imagery serving explanatory or embedded content roles.

## Similar Brands

| Business | Why |
| --- | --- |
| Google Search | Shares the same emphasis on a stark white background, minimal UI, and a single accent color (blue) for interactive elements, prioritizing content and speed. |
| Wikipedia | Similar content-first approach with a high-contrast black-on-white text layout and blue hyperlinks as the primary visual differentiator, minimal decorative elements. |
| Spotify Web Player (Light Theme) | Employs a white background with strong black typography and singular accent colors for interactivity, focusing on a clean conduit for media consumption. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text: #0f0f0f
- Background: #ffffff
- CTA: #065fd4
- Border: #c6c6c6
- Accent: #ff0033

**Example Component Prompts:**
1. Create a `Dialogue Card` with the heading 'Your YouTube history is off' (YouTube Sans, weight 600, size 20px, #0f0f0f), a body text description (Roboto, weight 400, size 14px, #0f0f0f), and a 'Learn more' link (Roboto, weight 400, size 14px, #065fd4). The card should have a #ffffff background, 10px radius, and a 1px #eeeeee border. Apply 16px padding on all sides.
2. Generate a `Rounded Action Button` with the text 'Update setting' (Roboto, weight 400, size 14px, #0f0f0f). The button should have a background of rgba(0,0,0,0.05), a border-radius of 18px, and 16px horizontal padding. Vertical padding should be 0px as per component variant.
3. Design a `Navigation Link` for 'Home' icon and text. Text color #0f0f0f, Roboto, weight 400, size 14px. On hover, background rgba(0,0,0,0.05). Use 12px vertical padding around the icon and text to align with active states.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933347653-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775933347653-thumb.jpg |
